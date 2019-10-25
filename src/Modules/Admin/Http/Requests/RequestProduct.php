<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products,p_name,' . $this->id,
            'category_id' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'This input is requried!',
            'name.unique' => 'Category name is duplicated!',
            'category.required' => 'This input is requried!'
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
