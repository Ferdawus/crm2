<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class ProductRequest extends FormRequest
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
            'category_name'       => 'numeric',
            'product_name'        => 'required|min:3|max:100',
            'code'                => 'nullable|max:10',
            'selling_price'       => 'nullable|numeric',
            'unit'                => 'nullable|numeric',
            'product_description' => 'nullable|max:500',
            'business_address'    => 'nullable|max:255|min:2',
            // 'product_status'      => 'numeric'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json([
        'errors' => $validator->errors()
    ],422));
    }
}