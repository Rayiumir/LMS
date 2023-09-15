<?php

namespace modules\LMS\Permissions\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|unique:roles,name',
            'permissions' => 'array|min:1',
        ];
    }
}
