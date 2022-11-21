<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SupplierRequest extends FormRequest
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
            'supplier_name'            => 'required | max:100 | min:3',
            'phone'                    => 'max:20',
            'business_name'            => 'max:100 | min:3',
            'business_address'         => 'max:500',
            'alternative_contact_name' => 'max:100 | min:3',
            'alternative_number'       => 'max:20',
            'city'                     => 'max:20',
            'country'                  => 'max:20',
            'facebook'                 => 'url',
            'other_social_media'       => 'url',
            'opening_balance'          => 'nullable|numeric|between:0,9999999999.99',
            'picture_attachment'       =>'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
         ];
    }
    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json([
        'errors' => $validator->errors()
    ],422));
    }
}