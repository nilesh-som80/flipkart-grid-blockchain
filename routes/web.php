<?php

use App\Http\Controllers\Admin\RegistrationController as AdminRegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\PayUMoneyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/header',[FrontendController::class,'header']);
Route::get('/footer',[FrontendController::class,'footer']);
Route::get('/admin_sidebar',[FrontendController::class,'admin_sidebar']);
Route::get('/box',[FrontendController::class,'box']);


Route::get('/',[FrontendController::class,'home']);
Route::get('about',[FrontendController::class,'about']);
Route::get('contact',[FrontendController::class,'contact']);
Route::get('404',[FrontendController::class,'error']);
Route::get('authors_list',[FrontendController::class,'authors_list']);
Route::get('cart',[FrontendController::class,'cart']);
Route::get('checkout',[FrontendController::class,'checkout']);
Route::post('payment',[FrontendController::class,'payment']);
Route::get('coming_soon',[FrontendController::class,'coming_soon']);
Route::get('faq',[FrontendController::class,'faq']);
Route::get('privacypolicy',[FrontendController::class,'privacypolicy']);
Route::get('my_account',[FrontendController::class,'my_account']);
Route::get('order_received',[FrontendController::class,'order_received']);
Route::get('single_product',[FrontendController::class,'single_product']);
Route::get('t&c',[FrontendController::class,'terms_conditons']);
Route::get('return_refund',[FrontendController::class,'return_refund']);
Route::get('books',[FrontendController::class,'books']);
Route::get('books_by_token',[FrontendController::class,'book_by_token']);

Route::get('book_by_category/{id}',[FrontendController::class,'book_by_category']);

Route::get('book_by_author/{id}',[FrontendController::class,'book_by_author']);

Route::post('/login',[AuthenticationController::class,'store']);
Route::post('/logout',[AuthenticationController::class,'destroy'])->name('logout');
Route::post('/register',[RegistrationController::class,'register']);
Route::post('/admin/register',[AdminRegistrationController::class,'store']);

Route::get('signin', [FrontendController::class, 'signin'])->name('login');
Route::get('signup', [FrontendController::class, 'signup'])->name('register');

Route::post('paymentgateway',[PayUMoneyController::class, 'initateTransaction']);

Route::group( ['middleware'=> ['auth','admin'] ],function () {

    Route::get('AddBooks', [FrontendController::class, 'AddBooks']);
    Route::get('booktable', [FrontendController::class, 'booktable']);
    Route::get('authoretable', [FrontendController::class, 'authoretable']);
    Route::get('bookimagetable', [FrontendController::class, 'bookimagetable']);
    Route::get('BooksImage', [FrontendController::class, 'BooksImage']);
    Route::get('BooksWithCategory', [FrontendController::class, 'BooksWithCategory']);
    Route::get('bookwithcategerytable', [FrontendController::class, 'bookwithcategerytable']);
    Route::get('categerytable', [FrontendController::class, 'categerytable']);
    Route::get('Category', [FrontendController::class, 'Category']);
    Route::get('Gener', [FrontendController::class, 'Gener']);
    Route::get('genertable', [FrontendController::class, 'genertable']);
    Route::get('AddAuthors', [FrontendController::class, 'index']);
    Route::get('Order', [FrontendController::class, 'Order']);
    Route::get('ordertable', [FrontendController::class, 'ordertable']);
    Route::get('sellerordertable', [FrontendController::class, 'sellerordertable']);
    Route::get('publication', [FrontendController::class, 'publication']);
    Route::get('publicationtable', [FrontendController::class, 'publicationtable']);
    Route::get('sellerbooktable', [FrontendController::class, 'sellerbooktable']);
    Route::get('sellerDetail', [FrontendController::class, 'sellerDetail']);
    Route::get('sellerdetailtable', [FrontendController::class, 'sellerdetailtable']);
    Route::get('SellersBook', [FrontendController::class, 'SellersBook']);
    Route::get('TransactionItems', [FrontendController::class, 'TransactionItems']);
    Route::get('UserAddress', [FrontendController::class, 'UserAddress']);
    Route::get('Useraddresstable', [FrontendController::class, 'Useraddresstable']);
    Route::post('redirect', [FrontendController::class, 'redirect']);
    Route::post('choosing_book_category', [FrontendController::class, 'choosing_book_category']);
    Route::post('choose_category', [FrontendController::class, 'choose_category']);
    Route::get('showtable/{id}/{seller_id}', [FrontendController::class, 'showtable']);
    Route::get('orderDetail/{id}', [FrontendController::class, 'orderDetail']);
});


Route::get('/viewAllBooks', [FrontendController::class, 'view_all_book']);
Route::post('/payumoney/success',[PayUMoneyController::class,'success'])->name("payment_success");
Route::post('/payumoney/failure',[PayUMoneyController::class,'failure']);

Route::post('/failure',[FrontendController::class,'failure']);
