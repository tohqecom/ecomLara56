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
            'name' => 'required|unique:products,p_name' . $this->id,
            'content' => 'required',
            'category_id' => 'required|not_in:0'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'This input is requried!',
            'name.unique' => 'Product name is duplicated!',
            'content.required' => 'This input is requried!',
            'category_id.required' => 'This input is requried!'
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
