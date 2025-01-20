<?php
namespace App\Http\Controllers\Backend;
use App\Models\BottomBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
class BottomBannerController extends Controller
{
    public function index()
    {
        $banners = BottomBanner::paginate(15);
        return view('backend.bottombanner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.bottombanner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hyperlink' => 'nullable|url', // Validate the hyperlink
        ]);

        $banner = new BottomBanner;

        if ($request->hasFile('image')) {
            $fileName = time() . '-slider-' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/sliders', $fileName, 'public');
            $banner->thumbnail_img = '/public/storage/' . $filePath; // Fixed path
        }
        $banner->title = $request->title;

        $banner->hyperlink = $request->input('hyperlink'); // Save the hyperlink

        $banner->save();
        Artisan::call('cache:clear');
        return redirect()->route('bottombanner.index')->with('success', 'banner added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = BottomBanner::findOrFail(decrypt($id));
        return view('backend.bottombanner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hyperlink' => 'nullable|url', // Validate the hyperlink
        ]);

        $banner = BottomBanner::findOrFail(decrypt($id));

        if ($request->hasFile('image')) {
            $fileName = time() . '-slider-' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads/sliders', $fileName, 'public');
            $banner->thumbnail_img = '/public/storage/' . $filePath; // Fixed path
        }
        $banner->title = $request->input('title');
        $banner->hyperlink = $request->input('hyperlink'); // Update the hyperlink

        $banner->save(); // Save the updated model
        Artisan::call('cache:clear');
        return redirect()->route('bottombanner.index')->with('success', 'banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = BottomBanner::findOrFail(decrypt($id));
        $banner->delete();
        Artisan::call('cache:clear');
        return redirect()->route('bottombanner.index')->with('success', 'banner deleted successfully.');
    }
}
