<?php namespace App\Http\Controllers;

use App\Admin;
use App\Book;
use App\books;
use App\carts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use App\User;
use App\users;
use Carbon\Carbon;
use Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class GeneralAppController extends Controller {

	//Created by SHayan Ahmad!

    public function index(){

        return 'index';

    }

    public function search(){

        return view('pages.publicPanel.search');

    }

    public function admin(){

        return 'admin';

    }

    public function browse(){
        $isUserLoggedIn = Auth::check();
        if($isUserLoggedIn){
            $userName = Auth::user()->name;
        }
        $bookss = Book::all();

            return view('pages.publicPanel.browse', compact('bookss', 'isUserLoggedIn', 'userName'));


    }

//    public function addToCart($book_id){
//        echo $book_id;
//    }
//
//    public function addToCartQty($book_id, $qty){
//        echo $book_id." ".$qty;
//    }
    public function addToCart($book_id){

        $isUserLoggedIn = Auth::check();

        if($isUserLoggedIn){
            $user_id = Auth::user()->id;
            Cart::create([
                'user_id' => $user_id, 'book_id' => $book_id,
                'cart_isChecked' => 0, 'created_at' => Carbon::now(),
                //'cart_quantity' =>
            ]);

            return redirect('/browse/');

        }else{
            return view('auth.login');
        }
    }
    public function checkout(){
        $user_id = Auth::user()->id;

        $result = Cart::where([
             'cart_isChecked' => 0,
             'user_id' => $user_id
            ])->get();
        //problem here!
//        $book_id = $result[0]->book_id;

        //$book_obj = Book::where(['book_id' => $book_id])->get();
        return view('pages.publicPanel.checkout', compact('result'));
    }

    public function checkout_confirm(){
        $user_id = Auth::user()->id;

        //update the carts table
        $maximum_nonUniqueCart = Cart::max('cart_nonUnique') + 1 ;

        Cart::where(['cart_isChecked' => 0, 'user_id' => $user_id])
            ->update(['cart_isChecked' => 1, 'cart_nonUnique' => $maximum_nonUniqueCart]);

        Order::insertGetId([
                'cart_nonUnique' => $maximum_nonUniqueCart,
                'order_status' => 1,
            ]);

        return redirect('checkout_getDetails/'.$maximum_nonUniqueCart);
    }

    public function getDetails($r){

        return view('pages.publicPanel.getDetails', compact('r'));

    }

    public function saveDetails($id){

        $input = Request::all();

        Order::insertGetId([
            'cart_nonUnique' => $id,
            'order_status' => 1,
            'order_customer_city' => $input['city'],
            'order_customer_state' => $input['state'],
            'order_customer_phone' => $input['phone'],
            'order_customer_billing_address' => $input['billingAddress'],
            'order_customer_delivery_address' => $input['deliveryAddress'],
            'created_at' => Carbon::now(),
            'updated_at'  => Carbon::now()
        ]);

        return redirect('/browse');

    }



}
