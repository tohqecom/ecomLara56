<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:categories,c_name,' . $this->id,
            'icon' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'This input is requried!',
            'name.unique' => 'Category name is duplicated!',
            'icon.required' => 'This input is requried!'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
