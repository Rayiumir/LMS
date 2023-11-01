<?php

namespace modules\LMS\Course\Http\Controllers;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function index()
    {
        return view('Courses::index');
    }
}
