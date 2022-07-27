<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\ProductNFT;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::paginate(36);
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['book_id'] = "book_" . rand(1000000000, 9999999999);
        Book::create($request->all());
        ProductNFT::create(
            [
                "book_id" => $request->book_id,
                "token" => Str::random(50),
            ]
        );
        return 'New book added';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return 'Book details updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return $book->name . " removed";
    }
    public function searchByBook(Request $request)
    {
        $data = Book::where('name', 'LIKE', "%{$request->keyword}%")->paginate(36);
        return $data;
    }
}
