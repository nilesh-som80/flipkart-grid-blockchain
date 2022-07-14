<?php

namespace App\Http\Controllers;

use App\Models\BookImage;
use Illuminate\Http\Request;

class BookImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(BookImage::join('books','book_images.book_id','=','books.book_id')
        ->select('book_images.id as bi_id','books.name','book_images.*')
        ->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BookImage::create($request->all());
        return 'New Image Added';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookImage  $bookImage
     * @return \Illuminate\Http\Response
     */
    public function show(BookImage $bookImage)
    {
        return $bookImage;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookImage  $bookImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookImage $bookImage)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookImage  $bookImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookImage $bookImage)
    {
        $bookImage->delete();
        return 'image deleted';
    }
}
