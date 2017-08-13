<?php

namespace App\Http\Requests;

class UpdateProductRequest extends StoreProductRequest
{
    
    public function rules()
    {
        $rules = parent::rules();
        $rules['name'] = 'required|unique:products,name,' . $this->route('product');
        return $rules;
    }
}
