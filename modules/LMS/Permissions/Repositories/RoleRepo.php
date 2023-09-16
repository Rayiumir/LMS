<?php

namespace modules\LMS\Permissions\Repositories;

use Spatie\Permission\Models\Role;

class RoleRepo
{
    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Role::all();
    }

    public function create($request)
    {
        return Role::create(['name' => $request->name])->syncPermissions($request->permissions);
    }
}
