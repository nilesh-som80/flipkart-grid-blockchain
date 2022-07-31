<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\AuthorsOfBook;
use App\Models\Book;
use App\Models\BookWithCategory;
use App\Models\Category;
use App\Models\Order;
use App\Models\ProductNFT;
use App\Models\SellersBook;
use App\Models\TransactionDetails;
use App\Models\TransactionItems;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    // Include Functions
    public function header()
    {
        return view('include.header');
    }
    public function footer()
    {
        return view('include.footer');
    }
    public function box()
    {
        return view('include.box');
    }
    public function admin_sidebar()
    {
        return view('include.admin_sidebar');
    }
    // User Functions
    public function home()
    {
        $data = Book::where('seller_id', '=', 'BOOK CHOR')
            ->where('discount_price', '<=', 99)
            ->inRandomOrder()
            ->paginate(25);
        // $data = Book::paginate(20);
        // dd( $data);

        return view('user.welcome', compact('data'));
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function single_product(Request $request)
    {
        $book = Book::where('id', '=', $request->id)
            ->where('seller_id', '=', $request->seller_id)
            ->first();
        return view('user.single_product', compact('book'));
    }
    public function cart()
    {
        $data = Order::where('user_id', '=', Auth::user()->user_id)
            ->leftJoin('books as b', 'b.book_id', '=', 'orders.book_id')
            ->selectRaw('b.*')
            ->selectRaw('orders.*')
            ->selectRaw('orders.id as od_id')
            ->where('orders.bought', 'LIKE', "0")
            ->paginate(50);
        $totalprice = User::where('users.user_id', '=', Auth::user()->user_id)
            ->join('orders', 'orders.user_id', '=', 'users.user_id')
            ->selectRaw('SUM(orders.selling_price) as total_price')
            ->groupBy('users.user_id')
            ->where('orders.bought', 'LIKE', "0")
            ->first();
        // ->toSql();
        // dd($totalprice);
        if (!$totalprice) {
            $totalprice = 0;
            $shipping = 0;
            return view('user.cart', compact('data', 'totalprice', 'shipping'));
        }
        $totalprice = $totalprice->total_price;
        $shipping = 100;
        if ($totalprice <= 100) {
            $shipping = 75;
        }
        if ($totalprice >= 1200) {
            $shipping = 0;
        }
        // dd($data);
        return view('user.cart', compact('data', 'totalprice', 'shipping'));
    }
    public function checkout()
    {
        $data = Order::where('user_id', '=', Auth::user()->user_id)
            ->leftJoin('books as b', 'b.book_id', '=', 'orders.book_id')
            ->selectRaw('b.*')
            ->selectRaw('orders.*')
            ->selectRaw('orders.id as od_id')
            ->where('orders.bought', 'LIKE', "0")
            ->paginate(50);
        $totalprice = User::where('users.user_id', '=', Auth::user()->user_id)
            ->join('orders', 'orders.user_id', '=', 'users.user_id')
            ->selectRaw('SUM(orders.selling_price) as total_price')
            ->where('orders.bought', 'LIKE', "0")
            ->groupBy('users.user_id')
            ->first();
        $totalprice = $totalprice->total_price;
        $shipping = 100;
        if ($totalprice <= 100) {
            $shipping = 75;
        }
        if ($totalprice >= 1200) {
            $shipping = 0;
        }
        return view('user.checkout', compact('data', 'totalprice', 'shipping'));
    }
    public function payment(Request $request)
    {
        $request->validate(['address_id' => 'required']);
        $data_1 = Order::where('user_id', '=', Auth::user()->user_id)
            ->update(['address_id' => $request->address_id]);
        $data = Order::where('user_id', '=', Auth::user()->user_id)
            ->leftJoin('books as b', 'b.book_id', '=', 'orders.book_id')
            ->selectRaw('b.*')
            ->selectRaw('orders.*')
            ->selectRaw('orders.id as od_id')
            ->where('orders.bought', 'LIKE', "0")
            ->get();
        // $data = $data_1->refresh();
        $totalprice = User::where('users.user_id', '=', Auth::user()->user_id)
            ->join('orders', 'orders.user_id', '=', 'users.user_id')
            ->selectRaw('SUM(orders.selling_price) as total_price')
            ->where('orders.bought', 'LIKE', "0")
            ->groupBy('users.user_id')
            ->first();
        $address = User::where('users.user_id', '=', Auth::user()->user_id)
            ->join('orders', 'orders.user_id', '=', 'users.user_id')
            ->join('user_addresses', 'user_addresses.address_id', '=', 'orders.address_id')
            ->selectRaw('user_addresses.address as user_addresses')
            ->groupBy('users.user_id')
            ->first();
        // dd($data);
        $totalprice = $totalprice->total_price;
        $shipping = 100;
        if ($totalprice <= 100) {
            $shipping = 75;
        }
        if ($totalprice >= 1200) {
            $shipping = 0;
        }
        return view('user.payment', compact('data', 'totalprice', 'address', 'shipping'));
    }
    public function coming_soon()
    {
        return view('user.coming_soon');
    }
    public function authors_list()
    {
        $res = [];
        $res['data'] = Author::all();
        return view('user.authors_list', compact('res'));
    }
    public function terms_conditons()
    {
        return view('user.terms_conditions');
    }
    public function return_refund()
    {
        return view('user.return_refund');
    }
    public function faq()
    {
        return view('user.faq');
    }
    public function privacypolicy()
    {
        return view('user.privacypolicy');
    }
    public function my_account()
    {
        $data = UserAddress::where('user_addresses.user_id', Auth::user()->user_id)->get();
        $data_1 = TransactionDetails::where('transaction_details.user_id', Auth::user()->user_id)
            ->join('transaction_items', 'transaction_details.bill_number', '=', 'transaction_items.bill_number')
            ->join('user_addresses', 'user_addresses.address_id', '=', 'transaction_details.address_id')
            ->join('orders', 'orders.order_id', '=', 'transaction_items.order_id')
            ->join('books', 'books.book_id', '=', 'orders.book_id')
            ->orderBy('transaction_details.created_at', 'DESC')
            ->get();
        // dd($data_1);
        return view('user.my_account', compact('data', 'data_1'));
    }
    public function books(Request $request)
    {
        if (!$request->keyword) {
            return redirect()->intended('/');
        }
        $data = Book::where('name', 'LIKE', "%{$request->keyword}%")
            ->paginate(36);
        // dd($data[0]);
        return view('user.books', compact('data'));
    }
    public function book_by_category($id)
    {
        $data = Book::where('categories_name', 'LIKE', "%{$id}%")
            ->paginate(50);
        // ->toSql();
        // echo $data;die;
        return view('user.book_by_category', compact('data'));
    }
    public function book_by_author($id)
    {
        $data = AuthorsOfBook::where('authors_of_books.authors_id', $id)
            ->leftJoin('books', 'authors_of_books.book_id', '=', 'books.book_id')
            ->leftJoin('sellers_books', 'sellers_books.book_id', '=', 'books.book_id')
            ->select('books.*')
            ->selectRaw('sellers_books.*')
            ->selectRaw('books.id as b_id')
            ->groupBy("books.book_id")
            ->groupBy('sellers_books.id')
            ->get();
        // dd($data);
        return view('user.book_by_author', compact('data'));
    }
    public function signin()
    {
        return view('login.signin');
    }
    public function signup()
    {
        return view('login.signup');
    }

    // Admin Function
    public function AddBooks()
    {
        return view('admin.AddBooks');
    }
    public function booktable()
    {
        $data = Book::paginate(50);
        return view('admin.booktable', compact('data'));
    }
    public function authoretable()
    {
        $author = Author::all();

        return view('admin.authoretable', compact("author"));
    }
    public function bookimagetable()
    {
        return view('admin.bookimagetable');
    }
    public function BooksImage()
    {
        return view('admin.BooksImage');
    }
    public function BooksWithCategory()
    {
        return view('admin.BooksWithCategory');
    }
    public function bookwithcategerytable()
    {
        return view('admin.bookwithcategerytable');
    }
    public function categerytable()
    {
        $category = Category::all();

        return view('admin.categerytable', compact("category"));
    }
    public function Category()
    {
        return view('admin.Category');
    }
    public function Gener()
    {
        return view('admin.Gener');
    }
    public function genertable()
    {
        return view('admin.genertable');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function Order()
    {
        return view('admin.Order');
    }
    public function ordertable()
    {
        $data = TransactionDetails::leftJoin('transaction_items', 'transaction_items.bill_number', '=', 'transaction_details.bill_number')
            ->leftJoin('users', 'users.user_id', '=', 'transaction_details.user_id')
            ->leftJoin('user_addresses', 'user_addresses.address_id', '=', 'transaction_details.address_id')
            ->selectRaw('GROUP_CONCAT(distinct transaction_items.order_id separator ", ") as ord_id')
            ->selectRaw('transaction_details.*')
            ->selectRaw('users.name')
            ->selectRaw('user_addresses.address')
            ->groupBy('transaction_details.id')
            ->get();
        // dd($data);
        return view('admin.ordertable', compact('data'));
    }
    public function sellerordertable()
    {
        $data = Order::leftJoin('books', 'books.book_id', '=', 'orders.book_id')
            ->leftJoin('users', 'users.user_id', '=', 'orders.user_id')
            ->leftJoin('user_addresses', 'user_addresses.address_id', '=', 'orders.address_id')
            ->selectRaw('orders.*')
            ->selectRaw('books.name as book_name')
            ->selectRaw('users.name as user_name')
            ->selectRaw('user_addresses.address')
            ->where('orders.bought', '=', '1')
            ->get();
        // dd($data);
        return view('admin.sellerordertable', compact('data'));
    }
    public function orderDetail($id)
    {
        $data = TransactionItems::leftJoin('orders', 'orders.order_id', '=', 'transaction_items.order_id')
            ->leftJoin('books', 'books.book_id', '=', 'orders.book_id')
            ->selectRaw('orders.*')
            ->selectRaw('books.name as book_name')
            ->where('transaction_items.bill_number', '=', $id)
            ->get();
        // dd($data);
        return view('admin.orderDetail', compact('data'));
    }
    public function publication()
    {
        return view('admin.publication');
    }
    public function publicationtable()
    {
        return view('admin.publicationtable');
    }
    public function sellerbooktable()
    {
        $data = SellersBook::join('books', 'books.book_id', '=', 'sellers_books.book_id')->get();
        // dd($data);
        return view('admin.sellerbooktable');
    }
    public function sellerDetail()
    {
        return view('admin.sellerDetail');
    }
    public function sellerdetailtable()
    {
        return view('admin.sellerdetailtable');
    }
    public function SellersBook()
    {
        return view('admin.SellersBook');
    }
    public function UserAddress()
    {
        return view('admin.UserAddress');
    }
    public function Useraddresstable()
    {
        $data = UserAddress::join('users', 'users.user_id', '=', 'user_addresses.user_id')->get();
        // dd($data);
        return view('admin.Useraddresstable', compact('data'));
    }
    public function TransactionItems()
    {
        return view('admin.transactionItems');
    }
    public function redirect(Request $request)
    {
        $request['book_id'] = "book_" . rand(1000000000, 9999999999);
        Book::create($request->all());

        $data = Author::all();

        $book_id = $request->book_id;

        return view('admin.choose_author', compact("data", "book_id"));
    }
    public function choose_category(Request $request)
    {
        // dd($request);
        foreach ($request->author as $auth) {
            AuthorsOfBook::create([
                'book_id' => $request->book_id,
                'authors_id' => $auth,
            ]);
        }
        $book_id = $request->book_id;
        $data = Category::all();
        return view('admin.choose_category', compact("data", "book_id"));
    }
    public function choosing_book_category(Request $request)
    {
        // dd($request);
        foreach ($request->category as $auth) {
            BookWithCategory::create([
                'book_id' => $request->book_id,
                'category_id' => $auth,
            ]);
        }

        // $book_id = $request->book_id;
        // $data=Category::all();
        return redirect('/booktable')->with('status', 'New book added');
    }

    public function showtable($id, $seller_id)
    {
        $book = Book::where("book_id", $id)->first();
        // dd($book);
        return view('admin.showtable', compact("book"));
    }
    //PayUMoney
    public function order_received()
    {
        return view('user.order_received');
    }
    public function failure()
    {
        return view('user.failure');
    }
    public function view_all_book()
    {
        $data = Book::paginate(36);

        return view('user.view_all_book', compact('data'));

    }
    public function book_by_token(Request $request)
    {
        // dd($request->token);
        if (!$request->token) {
            return redirect()->intended('/');
        }
        $book_id = ProductNFT::where('token', $request->token)
            ->first();
        // dd($book_id);
        if ($book_id) {
            $data = Book::where('book_id', $book_id->book_id)
                ->get();
            // dd($data);
            return view('user.books', compact('data'));

        } else {
            return redirect()->intended('/');

        }
    }
}
