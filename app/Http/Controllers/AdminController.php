<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller {

		public function __construct(){
			$this->middleware('auth', ['except' => ['show','store','create','show','edit','update','destroy']]);
		}


		public function index(){
			// echo "index";
			// $id=\Auth::user()->id;
			// echo $id;
			return view('admin.index');
		}



		public function create(){
			$count = Admin::count();
			//echo $count;
			if($count == 0){
					return view('admin.create');
			 }
			 else{
			 		return redirect('admin');
			 }

		}



		public function store(Request $request){
				$this->validate($request,[
					'name' => 'required|max:255' ,
					'email'=> 'required|email|max:255|unique:users' ,
					'password'=> 'required|confirmed|min:3' ,
					'password_confirmation'=> 'required|min:3' ,
					]);

					$input = $request->except('password_confirmation');
					$role =1;
					$user=User::create([
	              'role' =>$role,
	              'name' =>$input['name'],
	              'email' =>$input['email'],
	              'password' => bcrypt($input['password']),

	              ]);

								Admin::create([
				            'id' => $user->id,
				            ]);

					\Session::flash('flash_message', 'Task successfully added!');
					return redirect()->back();



		}



		public function show($id){
			//
		}



		public function edit($id){
			//
		}



		public function update($id){
			//
		}



		public function destroy($id){
			//
		}

}
