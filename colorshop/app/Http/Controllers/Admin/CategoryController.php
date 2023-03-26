<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::paginate(10);
        return view('Admin/category/show',compact('category'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.category.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('Admin.category.index', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if (is_null( $category)) {
            return redirect()->back()->with('Failed', 'Không tồn tại');
        } else {
            $category->update($request->all());
            return redirect()->route('categories.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (is_null($category)) {
            return back();
        } else {
            $category->delete();
            return back();
        }
    }
}
