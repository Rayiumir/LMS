<?php

namespace Modules\Rayiumir\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Rayiumir\Category\Http\Requests\CategoryRequest;
use Modules\Rayiumir\Category\Models\Category;
use Modules\Rayiumir\Category\Repositories\CategoryRepo;

class CategoryController extends Controller
{
    public $repo;
    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->repo = $categoryRepo;
    }
    public function index()
    {
        $categories = $this->repo->getAll();
        return view('Category::index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $this->repo->store($request);
        return back();
    }

    public function update($categoryId, CategoryRequest $request)
    {
        $this->repo->update($categoryId, $request);
        return back();
    }

    public function destroy($categoryId)
    {
        $this->repo->destroy($categoryId);
        return back();
    }
}
