<?php

namespace Modules\Rayiumir\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin::index');
    }

    public function logout(){
        Auth::logout();
        return to_route('login');
    }
}
