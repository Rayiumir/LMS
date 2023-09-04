<?php

namespace modules\LMS\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\LMS\Category\Http\Requests\CategoryRequest;
use modules\LMS\Category\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Categories::index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        $notification = array(
            'message' => 'دسته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function edit(Category $category)
    {
        $categories = Category::where('id', '!=', $category->id)->get();
        return view('Categories::edit', compact('categories', 'category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        return to_route('category.index');
    }
}
