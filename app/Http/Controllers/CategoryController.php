<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
			$category=Category::all();
			return view('category.index',compact('category'));
	}


	public function create(){
			return view('category.create');
	}



	public function store(Request $request){
			$this->validate($request, ['category_name' => 'required']);
			$input = $request->all();
 			Category::create($input);
 			\Session::flash('flash_message', 'Task successfully added!');
			return redirect()->back();
	}




	public function show($id){
		//
	}




	public function edit($id){
		$category = Category::where('category_id', $id)->first();
		return view('category.edit',compact('category'));
	}




	public function update($id,Request $request){
			$category = Category::where('category_id', $id)->first();
	 		$this->validate($request, ['category_name' => 'required']);

	    $input = $request->all();
			Category::where('category_id', $id)->update(['category_name' => $input['category_name']]);

    	\Session::flash('flash_message', 'Category successfully updated!');

    	return redirect()->back();
	}




	public function destroy($id){
		$category = Category::where('category_id', $id)->first();
		Category::where('category_id', $id)->delete();
		\Session::flash('flash_message', 'Category successfully deleted!');
		return redirect()->back();
	}

}
