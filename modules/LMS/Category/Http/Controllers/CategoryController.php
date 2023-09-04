<?php

namespace modules\LMS\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\LMS\Category\Http\Requests\CategoryRequest;
use modules\LMS\Category\Repositories\CategoryRepo;

class CategoryController extends Controller
{
    public CategoryRepo $repo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->repo = $categoryRepo;
    }
    public function index()
    {
        $categories = $this->repo->all();
        return view('Categories::index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $this->repo->store($request);

        $notification = array(
            'message' => 'دسته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function edit($categoryId)
    {
        $category = $this->repo->findById($categoryId);
        $categories = $this->repo->allExceptById($categoryId);
        return view('Categories::edit', compact('categories', 'category'));
    }

    public function update($categoryId, CategoryRequest $request)
    {
        $this->repo->update($categoryId, $request);

        $notification = array(
            'message' => 'دسته جدید با موفقیت به روز رسانی شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }

    public function destroy($categoryId)
    {
        $this->repo->delete($categoryId);

        $notification = array(
            'message' => 'دسته با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
