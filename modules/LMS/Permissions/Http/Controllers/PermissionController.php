<?php

namespace modules\LMS\Permissions\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\LMS\Permissions\Http\Requests\PermissionRequest;
use modules\LMS\Permissions\Http\Requests\RoleUpdateRequest;
use modules\LMS\Permissions\Repositories\PermissionRepo;
use modules\LMS\Permissions\Repositories\RoleRepo;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    private $roleRepo;
    private $permissionRepo;
    public function __construct(RoleRepo $roleRepo, PermissionRepo $permissionRepo)
    {
        $this->roleRepo = $roleRepo;
        $this->permissionRepo = $permissionRepo;
    }

    public function index(RoleRepo $roleRepo, PermissionRepo $permissionRepo)
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

    public function edit($roleId)
    {
        $roles = $this->roleRepo->findById($roleId);
        $permissions = $this->permissionRepo->all();
        return view('Permission::edit', compact('roles', 'permissions'));
    }

    public function update(RoleUpdateRequest $request, $id)
    {
        $this->roleRepo->update($id, $request);
        return to_route('permissions.index');
    }
}
