<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SalesRequest;
use App\Http\Resources\SalesResource;
use App\Http\Resources\SoftwareResource;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale = DB::table('sales')
        ->leftJoin('customers','sales.customer_name','customers.id')
        ->leftJoin('referrers','sales.referrer_id','referrers.id')
        ->leftJoin('hostings','sales.hosted_at','hostings.id')
        ->select('sales.*','customers.customer_name','referrers.referrer_name','hostings.hosting_name')
        ->paginate(5);
        return $sale;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesRequest $request)
    {
      
        $data = new Sale();
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
        $data->software_hosted_at               = ($request->software_hosted_at) ? $request->software_hosted_at:0;
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
        $data->hosted_at                        = ($request->hosted_at) ? $request->hosted_at:0;
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
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        // dd($sale);
        return new SalesResource($sale);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(SalesRequest $request, Sale $sale)
    {
        $sale->update([
            'customer_name'                    => $request->customer_name,
            'referrer_id'                      => $request->referrer_id,
            'customer_id'                      => $request->customer_id,
            'date'                             => $request->date,
            'business_name'                    => $request->business_name,
            'business_address'                 => $request->business_address,
            'website'                          => $request->website,
            'software'                         => $request->software,
            'software_name'                    => $request->software_name,
            'software_installation_id'         => $request->software_installation_id,
            'software_hosted_by'               => $request->software_hosted_by,
            'software_hosted_at'               => ($request->software_hosted_at) ? $request->software_hosted_at:0,
            'software_user_id'                 => $request->software_user_id,
            'software_url'                     => $request->software_url,
            'software_password'                => $request->software_password,
            'installation_date'                => $request->installation_date,
            'software_recurring_title'         => $request->software_recurring_title,
            'software_recurring_quantity'      => $request->software_recurring_quantity,
            'software_recurring_amount'        => $request->software_recurring_amount,
            'software_recurring_starting_date' => $request->software_recurring_starting_date,
            'software_status'                  => $request->software_status,
            'website_category'                 => $request->website_category,
            'website_installation_id'          => $request->website_installation_id,
            'hosted_by'                        => $request->hosted_by,
            'hosted_at'                        => ($request->hosted_at) ? $request->hosted_at:0,
            'website_url'                      => $request->website_url,
            'cPanel_id'                        => $request->cPanel_id,
            'website_password'                 => $request->website_password,
            'domain_purchased_by'              => $request->domain_purchased_by,
            'website_recurring_title'          => $request->website_recurring_title,
            'website_recurring_quantity'       => $request->website_recurring_quantity,
            'website_recurring_amount'         => $request->website_recurring_amount,
            'website_recurring_starting_date'  => $request->website_recurring_starting_date,
            'website_status'                   => $request->website_status,
        ]);

        return new SalesResource($sale,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return response()->json(['massage' => 'Data Delated Successfully']);
    }
    public function softwareDetails(){
         $data = DB::table('sales')
         ->leftJoin('hostings','sales.hosted_at','hostings.id')
         ->select('sales.software_name','sales.software_installation_id','sales.software_hosted_by','sales.software_hosted_at','sales.software_user_id','sales.software_url','sales.software_password','sales.installation_date','sales.software_recurring_title','sales.software_recurring_quantity','sales.software_recurring_amount','sales.software_recurring_starting_date','sales.software_status','hostings.hosting_name')
         ->paginate(5);
         return $data;
    }
    public function websiteDetails(){
        $data = DB::table('sales')
        ->leftJoin('hostings','sales.hosted_at','hostings.id')
        ->select('sales.website_category','sales.website_installation_id','sales.hosted_by','sales.hosted_at','sales.website_url','sales.cPanel_id','sales.website_password','sales.domain_purchased_by','sales.website_recurring_title','sales.website_recurring_quantity','sales.website_recurring_amount','sales.website_recurring_starting_date','sales.website_status','hostings.hosting_name')
        ->paginate(5);
        return $data;
    }
}