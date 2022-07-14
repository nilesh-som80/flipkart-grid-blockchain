<?php

namespace App\Http\Controllers;

use App\Models\AuthorsOfBook;
use Illuminate\Http\Request;

class AuthorsOfBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorsOfBook::leftJoin('books', 'author_of_books.book_id', '=', 'books.book_id')
            ->leftJoin('authors', 'author_of_books.author_id', '=', 'authors.author_id')
            ->select('author_of_books.id as aob_id', 'authors_of_book.*', 'authors.name', 'books.name')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AuthorsOfBook::create($request->all());
        return 'Book is linked with the author';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorsOfBook  $authorsOfBook
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorsOfBook $authorsOfBook)
    {
        return response()->json($authorsOfBook);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorsOfBook  $authorsOfBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorsOfBook $authorsOfBook)
    {
        $authorsOfBook->update($request->all());
        return 'authors of the book updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorsOfBook  $authorsOfBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorsOfBook $authorsOfBook)
    {
        $authorsOfBook->delete();
        return 'author removed from the book';
    }
    public function getBookList(Request $request)
    {
        $author = AuthorsOfBook::where('author_id', $request->author_id)
            ->join('books', 'authors_of_books.book_id', '=', 'books.book_id')
            ->select('authors_of_books.author_id ,
                        books.name as book_name,
                        books.image_1 as book_image')
            ->get();
        return response()->json($author);
    }
}
