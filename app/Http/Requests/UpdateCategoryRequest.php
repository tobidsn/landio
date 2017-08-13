<?php

namespace App\Http\Requests;

class UpdateCategoryRequest extends StoreCategoryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   
        $rules = parent::rules();
        $rules['name'] = 'required|unique:categories,name,'. $this->route('category');
        return $rules;
    }
}
