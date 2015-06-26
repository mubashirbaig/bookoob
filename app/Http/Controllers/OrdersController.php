<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Order;
use App\Cart;
use App\Book;
use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrdersController extends Controller {


	public function index(){
$temp=array();
			$orders=Order::all();
			$orders_status=array();
//			echo $orders[0]->order_id;
			$carts=array();

			for($i=0;$i<(count($orders));$i++){

					array_push($carts,Cart::where('cart_nonUnique',$orders[$i]->cart_nonUnique)->get());
					array_push($orders_status,$orders[$i]->order_status);

			}
		//	echo $carts[0][1]->cart_id;
					$i=0;
					$j=0;
					$books_name=array();
					$users_name=array();
					$users_email=array();
					$books_quantity=array();
					$books_price=array();

					foreach($carts as $cart){
$j=0;
					$customer=User::where('id',$cart[0]->user_id)->first();
					array_push($users_name,$customer->name);
					array_push($users_email,$customer->email);

				//echo $i;


					foreach($cart as $singleRec){
				//	echo count($singleRec);
				//	echo ($singleRec->cart_id) ."<br>";
						$book=Book::where('book_id',$singleRec->book_id)->first();
						$books_price[$i][$j]=($singleRec->cart_quantity*$book->book_price);
						$books_name[$i][$j]=$book->book_name;
						$books_quantity[$i][$j]=$singleRec->cart_quantity;
						array_push($temp,$book->book_name);
						//echo $book->book_name;
						$j++;
				}
			//	dd($temp) ;
				//echo $temp[0];

					$i++;
			//	echo "<br>";$
			}
//echo count($carts);
		$check=0;
		//echo $books_name[1][0];
		//echo $temp[0];
//echo count($books_name[1]);
			return view('orders.index',compact('books_name','users_name','users_email','books_price','books_quantity','carts','orders','orders_status'));
	}



	public function create(){
		//
	}




	public function store(){
		//
	}




	public function show($id){

	}




	public function edit($id){
		$order = Order::where('order_id', $id)->first();
		return view('orders.edit',compact('order'));

	}




	public function update($id,Request $request){
			$order = Order::where('order_id', $id)->first();
	 		$this->validate($request, ['order_status' => 'required']);

	    $input = $request->all();
			Order::where('order_id', $id)->update(['order_status' => $input['order_status']]);

    	\Session::flash('flash_message', 'Category successfully updated!');

    	return redirect()->back();
	}




	public function destroy($id){
			Order::where('order_id', $id)->delete();
			\Session::flash('flash_message', 'Successfully deleted!');
			return redirect('orders');
	}

}
