<?php

namespace modules\LMS\User\Repositories;

use modules\LMS\User\Models\User;

class UserRepo
{
    public function findByEmail($email){
        return User::query()->where('email', $email)->first();
    }
    public function getTeachers()
    {
        return User::permission('teach')->get();
    }
}
