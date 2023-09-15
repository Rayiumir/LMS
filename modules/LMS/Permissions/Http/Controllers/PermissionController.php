<?php

namespace modules\LMS\Permissions\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\LMS\Permissions\Http\Requests\PermissionRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('Permission::index', compact('roles', 'permissions'));
    }

    public function store(PermissionRequest $request)
    {

    }
}
