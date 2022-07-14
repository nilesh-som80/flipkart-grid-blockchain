<?php

namespace App\Http\Controllers;

use App\Models\SellersBook;
use Illuminate\Http\Request;

class SellersBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SellersBook::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SellersBook::create($request->all());
        return 'Book details by seller updated';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellersBook  $sellersBook
     * @return \Illuminate\Http\Response
     */
    public function show(SellersBook $sellersBook)
    {
        return response()->json($sellersBook);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellersBook  $sellersBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SellersBook $sellersBook)
    {
        $sellersBook->update($request->all());
        return 'seller book updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellersBook  $sellersBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellersBook $sellersBook)
    {
        $sellersBook->delete();
        return "seller deleted his book listing";
    }
}
