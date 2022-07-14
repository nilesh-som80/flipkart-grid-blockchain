<?php

namespace App\Http\Controllers;

use App\Models\BookWithGenre;
use Illuminate\Http\Request;

class BookWithGenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BookWithGenre::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BookWithGenre::create($request->all());
        return 'Book linked with this genre';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookWithGenre  $bookWithGenre
     * @return \Illuminate\Http\Response
     */
    public function show(BookWithGenre $bookWithGenre)
    {
        return $bookWithGenre;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookWithGenre  $bookWithGenre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookWithGenre $bookWithGenre)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookWithGenre  $bookWithGenre
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookWithGenre $bookWithGenre)
    {
        $bookWithGenre->delete();
        return 'book removed from the genre';
    }
    public function getBookByGenre(Request $request){
        $books = BookWithGenre::where('genre_id', $request->genre_id)
            ->join('books', 'book_with_genres.book_id', '=', 'books.book_id')
            ->select('book_with_genres.genre_id ,
                        books.name as book_name,
                        books.image_1 as book_image')
            ->get();
            return response()->json($books);
    }
}
