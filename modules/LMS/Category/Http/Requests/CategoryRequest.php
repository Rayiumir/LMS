<?php

namespace modules\LMS\Category\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:190',
            'slug' => 'required|max:190',
            'parent_id' => 'nullable|exists:categories,id',
        ];
    }
}
