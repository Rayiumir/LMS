<?php

namespace modules\LMS\Permissions\Repositories;

use Spatie\Permission\Models\Permission;

class PermissionRepo
{
    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return Permission::all();
    }
}
