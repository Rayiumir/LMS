<?php

namespace modules\LMS\Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin::admin');
    }
}
