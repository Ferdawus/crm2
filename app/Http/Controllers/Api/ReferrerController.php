<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReferrerRequest;
use App\Http\Resources\ReferrerResource;
use App\Models\Referrer;
use Illuminate\Http\Request;

class ReferrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return $data = ReferrerResource::collection(Referrer::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReferrerRequest $request)
    { 
        $data = Referrer::create($request->validated());
        return new ReferrerResource($data,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referrer  $referrer
     * @return \Illuminate\Http\Response
     */
    public function show(Referrer $referrer)
    {
        return new ReferrerResource($referrer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referrer  $referrer
     * @return \Illuminate\Http\Response
     */
    public function update(ReferrerRequest $request, Referrer $referrer)
    {
        $referrer->update($request->validated());
        return new ReferrerResource($referrer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referrer  $referrer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referrer $referrer)
    {
        $referrer->delete();
        return response()->json(['message' => 'Data Delated Successfully']);
    }
}