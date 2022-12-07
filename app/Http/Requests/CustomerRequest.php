<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerRequest extends FormRequest
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
            'customer_name'            => 'required | max:100 | min:2',
            'phone'                    => 'nullable | max:20',
            'business_name'            => 'nullable | max:100 | min:2',
            'business_address'         => 'nullable | max:500',
            'alternative_contact_name' => 'nullable | max:100 | min:2',
            'city'                     => 'nullable | max:20',
            'country'                  => 'nullable | max:20',
            'facebook'                 => 'nullable | url',
            'other_social_media'      => 'nullable | url',
            'opening_balance'          => 'nullable|numeric|between:0,9999999999.99',
            'picture_attachment'       =>'nullable | image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            // 'customer_status'          => 'numeric',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json([
        'errors' => $validator->errors()
    ],422));
    }
}