<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Tender::orderBy('category_id')->latest()->paginate(10);
        return view('backend.tenderservice.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Tender::where('category_id', 0)->get();
        return view('backend.tenderservice.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'pdf_file' => 'nullable|file|mimes:pdf|max:2048',
            'header_image' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',
        ]);

        $detail = new Tender;

        $detail->title = $request->title;
        if ($request->category_id) {
            $detail->category_id = $request->category_id;
        } else {
            $detail->category_id = 0;
        }
        if ($request->hasFile('pdf_file')) {
            $fileName = time() . '-trainingevent-' . $request->file('pdf_file')->getClientOriginalName();
            $filePath = $request->file('pdf_file')->storeAs('uploads/tenders', $fileName, 'public');
            $detail->pdf_file = '/public/storage/' . $filePath;
        }

        if ($request->hasFile('header_image')) {
            $fileName = time() . '-team-' . $request->file('header_image')->getClientOriginalName();
            $filePath = $request->file('header_image')->storeAs('uploads/tenders', $fileName, 'public');
            $detail->header_image = '/public/storage/' . $filePath;
        }

        $detail->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Tender added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $trainingEvents = Tender::where('category_id', $id)->get();

        dd($trainingEvents);
        return view('frontend.show', compact('trainingEvents'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit($id)
    {
        $tender = Tender::findOrFail(decrypt($id));
        $categories = Tender::where('category_id', 0)->get();
        return view('backend.tenderservice.edit', compact('categories', 'tender'));
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'category_id' => 'nullable|integer',
            'pdf_file' => 'nullable|file|mimes:pdf|max:2048',
            'header_image' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',

        ]);
        $detail = Tender::findOrFail(decrypt($id));
        $detail->title = $request->title;
        $detail->category_id = $request->category_id ?? 0;
        if ($request->hasFile('pdf_file')) {
            $fileName = time() . '-trainingevent-' . $request->file('pdf_file')->getClientOriginalName();
            $filePath = $request->file('pdf_file')->storeAs('uploads/trainingevents', $fileName, 'public');
            $detail->pdf_file = '/public/storage/' . $filePath;
        }
        if ($request->hasFile('header_image')) {
            $fileName = time() . '-team-' . $request->file('header_image')->getClientOriginalName();
            $filePath = $request->file('header_image')->storeAs('uploads/tenders', $fileName, 'public');
            $detail->header_image = '/public/storage/' . $filePath;
        }
        $detail->title = $request->title;
        $detail->update();
        Artisan::call('cache:clear');
        return back()->with('success', ' Tender updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Tender::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Tender deleted successfully.');
    }
}
