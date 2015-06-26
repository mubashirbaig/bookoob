<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Book;
use App\Admin;

use Illuminate\Http\Request;

class BooksController extends Controller {

	public function __construct(){
		$this->middleware('auth', ['except' => ['show']]);
	}


		public function index(){
				$books= Book::select('book_id','book_name','book_description')->get();
				return view('books.index',compact('books'));
		}


		public function create(){
			$users = Category::select('category_name')->get();
			return view('books.create',compact('users'));
		}



		public function store(Request $request){
			$this->validate($request, [
	        'book_name' => 'required|unique:books|max:255',
	        'book_contents' => 'required',
	        'book_ISBN' => 'required|digits:13|unique:books',
	        'book_date_published' => 'required',
	        'book_author' => 'required',
					'book_publisher' => 'required',
	        'book_price' => 'required|numeric',
	        'book_quantity' => 'required',
	        'book_description' => 'required',
	      	'image'=> 'required|mimes:png,jpeg|max:3000'
    	]);


			$destinationName='/public/images/';
	    $input = $request->all();
			$role=\Auth::user()->id;
			$user = Category::where('category_name', $input['category'])->first();
			$admin=Admin::where('id',$role)->first();


	    $destinationName='/public/images/';
			$imageName = $input['book_ISBN'] . '.' .$request->file('image')->getClientOriginalExtension();
			$request->file('image')->move(
		        base_path() . $destinationName, $imageName
		    );




	    Book::create([

	    	'category_id' => $user->category_id,
	    	'admin_id' => $admin->admin_id,
	    	'book_name' => $input['book_name'],
	    	'book_contents' => $input['book_contents'],
	    	'book_ISBN' => $input['book_ISBN'],
				'book_author' => $input['book_author'],
				'book_price' => $input['book_price'],
				'book_publisher' => $input['book_publisher'],
				'book_image_path' => $imageName,
	    	'book_date_published' => $input['book_date_published'],
	    	'book_quantity' => $input['book_quantity'],
	    	'book_description' => $input['book_description'],
	    ]);

	    \Session::flash('flash_message', 'Task successfully added!');
			return redirect()->back();
		}




		public function show($id){
			$book = Book::where('book_id', $id)->first();
			$category = Category::where('category_id', $book->category_id)->first();
		//	return view('books.show',compact('book','category'));
		}




		public function edit($id){
			$users = Category::select('category_name')->get();
			$book = Book::where('book_id', $id)->first();
    	return view('books.edit',compact('users','book'));
		}




		public function update($id,Request $request){
					$book = Book::where('book_id',$id);
					$this->validate($request, [
			        'book_name' => 'required|max:255',
			        'book_contents' => 'required',
			        'book_ISBN' => 'required|digits:13',
			        'book_date_published' => 'required',
			        'book_author' => 'required',
							'book_publisher' => 'required',
			        'book_price' => 'required|numeric',
			        'book_quantity' => 'required',
			        'book_description' => 'required',
			      	'image'=> 'required|mimes:png,jpeg|max:3000'
		    	]);




					$input = $request->all();
					$destinationName='/public/images/';
					$imageName = $input['book_ISBN'] . '.' .$request->file('image')->getClientOriginalExtension();
					$request->file('image')->move(
								base_path() . $destinationName, $imageName
						);



				Book::where('book_id',$id)->update([
					'book_name' => $input['book_name'],
		    	'book_contents' => $input['book_contents'],
		    	'book_ISBN' => $input['book_ISBN'],
					'book_author' => $input['book_author'],
					'book_price' => $input['book_price'],
					'book_publisher' => $input['book_publisher'],
					'book_image_path' => $imageName,
		    	'book_date_published' => $input['book_date_published'],
		    	'book_quantity' => $input['book_quantity'],
		    	'book_description' => $input['book_description'],
					]);

					\Session::flash('flash_message', 'Successfully updated!');

					return redirect()->back();
		}




		public function destroy($id){
			Book::where('book_id', $id)->delete();
			\Session::flash('flash_message', 'Successfully deleted!');
			return redirect('admin');
		}

}
