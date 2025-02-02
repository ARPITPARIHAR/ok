<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;

class BranchController extends Controller
{

    public function index()
    {
        $boards = Branch::paginate(15);
        return view('backend.branches.index', compact('boards'));
    }


    public function create()
    {

        return view('backend.branches.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',


            'header_image' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',
        ]);

        $detail = new Branch;

        $detail->title = $request->title;
        $detail->brief_description = $request->brief_description;


        if ($request->hasFile('thumbnail_img')) {
            $fileName = time() . '-team-' . $request->file('thumbnail_img')->getClientOriginalName();
            $filePath = $request->file('thumbnail_img')->storeAs('uploads/tenders', $fileName, 'public');
            $detail->header_image = '/public/storage/' . $filePath;
        }

        $detail->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Tender added successfully.');
    }


    public function show($id)
    {
        $trainingEvents = Branch::where('category_id', $id)->get();


        return view('frontend.show', compact('trainingEvents'));
    }




    public function edit($id)
    {
        $board = Branch::findOrFail(decrypt($id));

        return view('backend.branches.edit', compact( 'board'));
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',

            'header_image' => 'nullable|file|mimes:jpg,png,jpeg|max:2048',

        ]);
        $detail = Branch::findOrFail(decrypt($id));
        $detail->title = $request->title;
        $detail->brief_description = $request->brief_description;

        if ($request->hasFile('header_image')) {
            $fileName = time() . '-team-' . $request->file('header_image')->getClientOriginalName();
            $filePath = $request->file('header_image')->storeAs('uploads/tenders', $fileName, 'public');
            $detail->header_image = '/public/storage/' . $filePath;
        }
        $detail->title = $request->title;
        $detail->update();
        Artisan::call('cache:clear');
        return back()->with('success', ' Branch updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {


        Branch::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Branch deleted successfully.');
    }
}
