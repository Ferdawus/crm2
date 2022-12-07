<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SalesRequest extends FormRequest
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
            'customer_name'                    => 'required',
            'referrer_id'                      => 'required',
            'customer_id'                      => 'nullable|max:10',
            'date'                             => 'nullable|date|date_format:Y-m-d',
            'business_name'                    => 'nullable|min:3|max:100',
            'business_address'                 => 'nullable|min:3|max:500',
            // 'website'                          => 'nullable|numeric',
            // 'software'                         => 'nullable|numeric',
            'software_name'                    => 'nullable|min:2|max:200',
            'software_installation_id'         => 'nullable|min:2|max:10',
            'software_hosted_by'               => 'nullable|min:2',
            'software_hosted_at'               => 'nullable|numeric',
            'software_user_id'                 => 'nullable|min:2',
            'software_url'                     => 'nullable|url',
            'software_password'                => 'nullable|min:3',
            'installation_date'                => 'nullable|date|date_format:Y-m-d',
            'software_recurring_title'         => 'nullable|min:3|max:100',
            'software_recurring_quantity'      => 'nullable|numeric',
            'software_recurring_amount'        => 'nullable|numeric|between:0,9999999999.99',
            'software_recurring_starting_date' => 'nullable|date|date_format:Y-m-d',
            // 'software_status'                  => 'numeric',
            'website_category'                 => 'nullable|min:2|max:200',
            'website_installation_id'          => 'nullable|min:2|max:10',
            'hosted_by'                        => 'nullable|min:2',
            'hosted_at'                        => 'nullable|numeric',
            'website_url'                      => 'nullable|url',
            'cPanel_id'                        => 'nullable',
            'website_password'                 => 'nullable|min:3',
            'domain_purchased_by'              => 'nullable|min:2',
            'website_recurring_title'          => 'nullable|min:3|max:200', 
            'website_recurring_quantity'       => 'nullable|numeric',
            'website_recurring_amount'         => 'nullable|numeric|between:0,9999999999.99',
            'website_recurring_starting_date'  => 'nullable|date|date_format:Y-m-d',
            // 'website_status'                   => 'numeric',
        ];
    }
     protected function failedValidation(Validator $validator)
     {
     throw new HttpResponseException(response()->json([
        'errors' => $validator->errors()
     ],422));
     }
}