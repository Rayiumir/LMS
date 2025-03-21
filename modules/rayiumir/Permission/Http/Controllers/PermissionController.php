<?php

namespace Modules\Rayiumir\Permission\Http\Controllers;

use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index()
    {
        return view('Permission::index');
    }
}
