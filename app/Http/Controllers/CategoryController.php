<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.required' => 'Category name cannot be empty.',
            'name.string' => 'Category name must be a string.',
            'name.max' => 'Category name cannot exceed 255 characters.',
            'name.unique' => 'Category name already exists.'
        ]);

        Category::create([$request->all()]);
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
        ], [
            'name.required' => 'Category name cannot be empty.',
            'name.string' => 'Category name must be a string.',
            'name.max' => 'Category name cannot exceed 255 characters.',
            'name.unique' => 'Category name already exists.'
        ]);

        Category::findOrFail($id)->update($request->all());
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        try {
            if ($category->products()->count() > 0) {
            return redirect()->route('category.index')->with('error', 'Category cannot be deleted because it has products.');
            }

            $category->delete();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('category.index')->with('error', 'An error occurred while deleting the category: ' . $e->getMessage());
        }
    }
}
