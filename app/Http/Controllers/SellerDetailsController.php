<?php

namespace App\Http\Controllers;

use App\Models\SellerDetails;
use Illuminate\Http\Request;

class SellerDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SellerDetails::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->seller_id = 'seller_'.rand(100000000,999999999);
        SellerDetails::create($request->all());
        return 'New Seller Added';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerDetails  $sellerDetails
     * @return \Illuminate\Http\Response
     */
    public function show(SellerDetails $sellerDetails)
    {
        return $sellerDetails;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellerDetails  $sellerDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellerDetails $sellerDetails)
    {
        $sellerDetails->update($request->all());
        return 'seller details updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerDetails  $sellerDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerDetails $sellerDetails)
    {
        $sellerDetails->delete();
        return 'Seller removed';
    }
}
