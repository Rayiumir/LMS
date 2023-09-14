<?php

namespace modules\LMS\Permissions\Http\Controllers;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('Permission::index', compact('roles'));
    }
}
