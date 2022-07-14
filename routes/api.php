<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookImageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SellersBookController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\AuthorsOfBookController;
use App\Http\Controllers\BookWithGenreController;
use App\Http\Controllers\SellerDetailsController;
use App\Http\Controllers\BookWithCategoryController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\AuthenticationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/author',AuthorController::class);
Route::apiResource('/authorsOfBook',AuthorsOfBookController::class);
Route::apiResource('/book',BookController::class);
Route::apiResource('/bookImage',BookImageController::class);
Route::apiResource('/bookWithCategory',BookWithCategoryController::class);
Route::apiResource('/bookWithGenre',BookWithGenreController::class);
Route::apiResource('/category',CategoryController::class);
Route::apiResource('/genre',GenreController::class);
Route::apiResource('/order',OrderController::class);
Route::apiResource('/publication',PublicationController::class);
Route::apiResource('/sellerDetails',SellerDetailsController::class);
Route::apiResource('/sellersBook',SellersBookController::class);
Route::apiResource('/userAddress',UserAddressController::class);
Route::apiResource('/contactUs',ContactUsController::class);
Route::get('/booksByAuthor', [AuthorsOfBookController::class, "getBookList"]);
Route::get('/booksByCategory', [BookWithCategoryController::class, "booksByCategory"]);
Route::get('/searchByBook', [BookController::class, "searchByBook"]);
Route::get('/addressByUserId',[UserAddressController::class , 'addressByUserId']);


