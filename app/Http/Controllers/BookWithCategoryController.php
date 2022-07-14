<?php

namespace App\Http\Controllers;

use App\Models\BookWithCategory;
use Illuminate\Http\Request;

class BookWithCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(BookWithCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BookWithCategory::create($request->all());
        return 'book is categories to new category';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookWithCategory  $bookWithCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BookWithCategory $bookWithCategory)
    {
        return $bookWithCategory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookWithCategory  $bookWithCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookWithCategory $bookWithCategory)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookWithCategory  $bookWithCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookWithCategory $bookWithCategory)
    {
        $bookWithCategory->delete();
        return 'book removed from the category';
    }

    public function booksByCategory(Request $request)
    {
        // dd($request);
        $books = BookWithCategory::where('book_with_categories.category_id', $request->category_id)
        ->leftJoin('books', 'book_with_categories.book_id', '=', 'books.book_id')
        ->leftJoin('sellers_books', 'sellers_books.book_id', '=', 'books.book_id')
        // ->select('book_with_categories.category_id' ,
        // 'books.name as book_name' ,
        // 'books.image_1 as book_image')
        ->get();
            return response()->json($books);
    }
}
