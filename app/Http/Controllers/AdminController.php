<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Auth;
use App\User;
use Illuminate\Http\Request;

  class AdminController extends Controller {

      protected $auth;

    	public function index(){
    		//return view('books.index');
        return view('admin.login');
    	}

      public function postLogin(Request $request){
          $this->validate($request, [
            'admin_email' => 'required|email', 
            'admin_password' => 'required',
          ]);

          $credentials = $request->only('admin_email', 'admin_password');
          if (Auth::attempt($credentials, $request->has('remember'))){
            dd("Hello");
            //return redirect('books.index');
            //echo "string";
          }


          //dd($request->all());
      }

    	
    	public function create(){
      //  $users = Admin::count();

        //if($users==0){
           
            return view('admin.register');
          //} 
        //else{
    		  //  return redirect('admin');
        //} 
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


          //dd($request->except('admin_password_confirmation'));
        
    	}

    	
    	public function show($id)
    	{
    		//
    	}

    	
    	public function edit($id)
    	{
    		//
    	}

    	
    	public function update($id)
    	{
    		//
    	}

    	
    	public function destroy($id)
    	{
    		//
    	}

  }
