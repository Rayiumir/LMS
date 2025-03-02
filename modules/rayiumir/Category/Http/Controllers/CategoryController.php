<?php

namespace Modules\Rayiumir\Category\Http\Controllers;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('Category::index');
    }

    public function create()
    {
        return view('Category::create');
    }
}
