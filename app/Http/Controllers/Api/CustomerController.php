<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CustomerResource::collection(Customer::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $data = new Customer();

        $data->customer_name            = $request->customer_name;
        $data->phone                    = $request->phone;
        $data->business_name            = $request->business_name;
        $data->business_address         = $request->business_address;
        $data->alternative_contact_name = $request->alternative_contact_name;
        $data->alternative_number       = $request->alternative_number;
        $data->city                     = $request->city;
        $data->country                  = $request->country;
        $data->facebook                 = $request->facebook;
        $data->other_social_media       = $request->other_social_media;
        $data->opening_balance          = $request->opening_balance;
        $data->customer_status          = ($request->customer_status) ? $request->customer_status : 0;
        $data->save();

        return new CustomerResource($data,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update([
            'customer_name'            => $request->customer_name,
            'phone'                    => $request->phone,
            'business_name'            => $request->business_name,
            'business_address'         => $request->business_address,
            'alternative_contact_name' => $request->alternative_contact_name,
            'alternative_number'       => $request->alternative_number,
            'city'                     => $request->city,
            'country'                  => $request->country,
            'facebook'                 => $request->facebook,
            'other_social_media'       => $request->other_social_media,
            'opening_balance'          => $request->opening_balance,
            'customer_status'          =>($request->customer_status) ? $request->customer_status : 0,
        ]);
        
        return new CustomerResource($customer,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->json(['massage' => 'Data Deleted Successfully']);
    }
}