<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class BooksController extends Controller {

	public function home()
	{
		$id=\Auth::user()->id;
	    return view('adminPanel.home');
	    
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('books.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		$users = Category::select('category_name')->get();
		//$users="ahmad";
		return view('books.create',compact('users'));	
		//dd($users[0]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//dd($request->all());
		/*$this->validate($request, [
	        'book_name' => 'required|unique|max:255',
	        'book_contents' => 'required',
	        'book_ISBN' => 'required',
	        'book_date_published' => 'required', 
	        'book_quantity' => 'required',
	        'book_description' => 'required',
    	]);

    	$input = $request->all();*/
    	$role=\Auth::user()->id;
    	echo $role;


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
