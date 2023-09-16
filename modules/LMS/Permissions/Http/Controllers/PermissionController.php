<?php

namespace modules\LMS\Permissions\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\LMS\Permissions\Http\Requests\PermissionRequest;
use modules\LMS\Permissions\Repositories\PermissionRepo;
use modules\LMS\Permissions\Repositories\RoleRepo;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    private $roleRepo;
    public function __construct(RoleRepo $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }

    public function index(PermissionRepo $permissionRepo, RoleRepo $roleRepo)
    {
        $roles = $roleRepo->all();
        $permissions = $permissionRepo->all();
        return view('Permission::index', compact('roles', 'permissions'));
    }

    public function store(PermissionRequest $request)
    {
        $this->roleRepo->create($request);
        return to_route('permissions.index');
    }
}
