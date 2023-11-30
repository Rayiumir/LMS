<?php

namespace modules\LMS\Course\Http\Controllers;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('Courses::index');
    }

    public function create(UserRepo $userRepo)
    {
        $teachers = $userRepo->getTeachers();
        return view('Courses::create');
    }
}
