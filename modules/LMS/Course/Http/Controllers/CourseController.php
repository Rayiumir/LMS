<?php

namespace modules\LMS\Course\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\LMS\Category\Repositories\CategoryRepo;
use modules\LMS\User\Repositories\UserRepo;

class CourseController extends Controller
{
    public function index()
    {
        return view('Courses::index');
    }

    public function create(UserRepo $userRepo, CategoryRepo $categoryRepo)
    {
        $teachers = $userRepo->getTeachers();
        $categories = $categoryRepo->all();
        return view('Courses::create', compact('teachers', 'categories'));
    }
}
