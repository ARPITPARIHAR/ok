<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class GalleryController extends Controller
{
    public function index()
    {
        $details = Gallery::paginate(15);
        return view('backend.galleries.index', compact('details'));
    }

    public function create()
    {
        return view('backend.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'title' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate multiple images
        ]);

        $detail = new Gallery;



        if ($request->hasFile('thumbnail_img')) {
            $fileName = time() . '-board-' . $request->file('thumbnail_img')->getClientOriginalName();
            $filePath = $request->file('thumbnail_img')->storeAs('uploads/gallery', $fileName, 'public');
            $detail->images = '/public/storage/' . $filePath;
        }


        $detail->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Details added successfully.');
    }

    public function show($id)
    {
        return view('backend.galleries.show');
    }

    public function edit($id)
    {
        $detail = Gallery::findOrFail(decrypt($id));
        return view('backend.galleries.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $detail = Gallery::findOrFail(decrypt($id));
        if ($request->hasFile('thumbnail_img')) {
            $fileName = time() . '-board-' . $request->file('thumbnail_img')->getClientOriginalName();
            $filePath = $request->file('thumbnail_img')->storeAs('uploads/gallery', $fileName, 'public');
            $detail->images = '/public/storage/' . $filePath;
        }


        $detail->save();

        Artisan::call('cache:clear');

        return back()->with('success', 'Detail updated successfully.');
    }

    public function destroy($id)
    {
        Gallery::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail deleted successfully.');
    }
}
