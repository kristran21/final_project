<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProdBrandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand_product_name' => 'required|string|max:255',
            'brand_product_desc' => 'required|string|max:255',
            'brand_product_status' => 'required'
        ];
    }
}
