<?php

namespace modules\LMS\Permissions\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|exists:roles,id',
            "name" => "required|min:3|unique:roles,name," . request()->id,
            'permissions' => 'required|array|min:1'
        ];
    }
}
