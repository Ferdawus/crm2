<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = new Product();

        $data->category_name       = $request->category_name;
        $data->product_name        = $request->product_name;
        $data->code                = $request->code;
        $data->selling_price       = $request->selling_price;
        $data->unit                = $request->unit;
        $data->product_status      = ($request->product_status)? $request->product_status : 0;
        $data->product_description = $request->product_description;
        $data->save();

        return new ProductResource($data,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update([
            'category_name'       => $request->category_name,
            'product_name'        => $request->product_name,
            'code'                => $request->code,
            'selling_price'       => $request->selling_price,
            'unit'                => $request->unit,
            'product_status'      => ($request->product_status)? $request->product_status : 0,
            'product_description' => $request->product_description,
        ]);

        return new ProductResource($product,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['massage' => 'Data Deleted Successfully']);
    }
}