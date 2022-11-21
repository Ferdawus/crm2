<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\SalesRequest;
use App\Http\Resources\SalesResource;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesRequest $request)
    {
        $data = new Sales();
        $data->customer_name                    = $request->customer_name;
        $data->referrer_id                      = $request->referrer_id;
        $data->customer_id                      = $request->customer_id;
        $data->date                             = $request->date;
        $data->business_name                    = $request->business_name;
        $data->business_address                 = $request->business_address;
        $data->website                          = $request->website;
        $data->software                         = $request->software;
        $data->software_name                    = $request->software_name;
        $data->software_installation_id         = $request->software_installation_id;
        $data->software_hosted_by               = $request->software_hosted_by;
        $data->software_hosted_at               = $request->software_hosted_at;
        $data->software_user_id                 = $request->software_user_id;
        $data->software_url                     = $request->software_url;
        $data->software_password                = $request->software_password;
        $data->installation_date                = $request->installation_date;
        $data->software_recurring_title         = $request->software_recurring_title;
        $data->software_recurring_quantity      = $request->software_recurring_quantity;
        $data->software_recurring_amount        = $request->software_recurring_amount;
        $data->software_recurring_starting_date = $request->software_recurring_starting_date;
        $data->software_status                  = $request->software_status;
        $data->website_category                 = $request->website_category;
        $data->website_installation_id          = $request->website_installation_id;
        $data->hosted_by                        = $request->hosted_by;
        $data->hosted_at                        = $request->hosted_at;
        $data->website_url                      = $request->website_url;
        $data->cPanel_id                        = $request->cPanel_id;
        $data->website_password                 = $request->website_password;
        $data->domain_purchased_by              = $request->domain_purchased_by;
        $data->website_recurring_title          = $request->website_recurring_title;
        $data->website_recurring_quantity       = $request->website_recurring_quantity;
        $data->website_recurring_amount         = $request->website_recurring_amount;
        $data->website_recurring_starting_date  = $request->website_recurring_starting_date;
        $data->website_status                   = $request->website_status;

        $data->save();

        return new SalesResource($data,201);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        //
    }
}