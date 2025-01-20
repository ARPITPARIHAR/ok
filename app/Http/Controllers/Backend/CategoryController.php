<?php

namespace App\Http\Controllers\Backend;


use App\Models\Category;
use App\Models\Information;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(15);
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'serial_no' => 'required|integer',
            'active' => 'required|boolean',
            'description' => 'nullable|string',
        ]);

        // Create a new category
        $category = new Category;
        $category->name = $request->name;
        $category->serial_no = $request->serial_no;
        $category->active = $request->active;
        $category->description = $request->description;

        // Save the category
        $category->save();

        // Redirect back with success message
        return redirect()->route('categories.index')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail(decrypt($id));
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'serial_no' => 'required|integer',
            'active' => 'required|boolean',
            'description' => 'nullable|string',
        ]);

        // Find category and update
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->serial_no = $request->serial_no;
        $category->active = $request->active;
        $category->description = $request->description;
        $category->save();

        // Redirect back with success message
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Catergory deleted successfully.');
    }


    public function subcategories($id)
    {
        // Fetch the category by ID
        $category = Category::findOrFail($id);

        // Optionally fetch subcategories related to this category
        $subcategories = SubCategory::where('category_id', $id)->get();

        // Return a view with the category and its subcategories
        return view('backend.categories.subcategories', compact('category', 'subcategories'));
    }

    public function storeSubcategory(Request $request, $categoryId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'serial_no' => 'required|integer',
            'active' => 'required|boolean',
            'page_link' => 'nullable|url',  // Page link is optional but must be a valid URL if provided
        ]);

        // Fetch the category
        $category = Category::findOrFail($categoryId);

        // Create a new subcategory
        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->serial_no = $request->serial_no;
        $subcategory->active = $request->active;
        $subcategory->page_link = $request->page_link;
        $subcategory->category_id = $category->id;
        $subcategory->save();

        return redirect()->route('categories.subcategories', $categoryId)
                         ->with('success', 'Subcategory added successfully.');
    }



    public function editsubcategory($categoryId, $subcategoryId)
    {
        $category = Category::findOrFail(decrypt($categoryId));
        $subcategory = SubCategory::findOrFail(decrypt($subcategoryId));

        // Return the view with the category and subcategory data
        return view('backend.categories.subcategoriesedit', compact('category', 'subcategory'));

    }


    public function updateSubcategory(Request $request, $categoryId, $subcategoryId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'serial_no' => 'required|integer',
            'active' => 'required|boolean',
            'page_link' => 'nullable|url',
        ]);

        // Decrypt the categoryId and subcategoryId
        $categoryId = decrypt($categoryId);
        $subcategoryId = decrypt($subcategoryId);

        // Find the subcategory
        $subcategory = SubCategory::findOrFail($subcategoryId);

        // Update the subcategory fields
        $subcategory->name = $request->name;
        $subcategory->serial_no = $request->serial_no;
        $subcategory->active = $request->active;
        $subcategory->page_link = $request->page_link;
        $subcategory->category_id = $categoryId; // Use the decrypted value
        $subcategory->save();

        // Redirect with a success message
        return redirect()->route('categories.subcategories', encrypt($categoryId))
                         ->with('success', 'Subcategory updated successfully');
    }
    public function destroySubcategory($categoryId, $subcategoryId)
    {
        // Decrypt the categoryId and subcategoryId
        $category = Category::findOrFail(decrypt($categoryId));
        $subcategory = SubCategory::findOrFail(decrypt($subcategoryId));

        // Delete the subcategory
        $subcategory->delete();

        // Redirect back to the subcategory edit route with encrypted categoryId and subcategoryId
        return redirect()->route('categories.subcategories.edit', [
            'category' => encrypt($category->id),
            'subcategory' => encrypt($subcategory->id)
        ])
        ->with('success', 'Subcategory deleted successfully');
    }

    public function downloadPdf($id)
    {
        // Find the subcategory
        $subcategory = Subcategory::with('pdf')->findOrFail($id);

        // Check if a PDF is associated with the subcategory
        if (!$subcategory->pdf || !Storage::exists($subcategory->pdf->file_path)) {
            return redirect()->back()->with('error', 'No PDF found for this subcategory.');
        }

        // Serve the file for download
        return Storage::download($subcategory->pdf->file_path);
    }


}
