<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\Author;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function adminlogin(){
        return view('adminlogin');
    }

  public function loginadmin(Request $request){
          $request->validate([
            'email' => 'required',
            'password' => 'required',
          ]);

          if(auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
          {
          $admin = auth()->guard('admin')->user();
          return redirect('admin/dashboard')->with('success','You are Logged in Succesfully');
          }else{
            return redirect()->route('adminlogin')->with('error',"oops! Invalid Email And Password");
          }
    }
    
    public function dashboard(Request $request){
     
        if (auth()->guard('admin')) {
          
          $users = Author::get();
            return view('admin.auth.dashboard',compact('users'));
        }
              return redirect()->route('adminlogin')->with('error', 'Opps! You do not have access');
    }
 

    public function logout(){
      Session::flush();
      Auth::logout();

      return redirect()->route('adminlogin')->with('success' , 'Logout Successfully');
    }
  
    
}
