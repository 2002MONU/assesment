<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserRegisterController extends Controller
{
    //

    public function userRegister(){
        return view('user.user-register');
    }

    public function userRegisterPost(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'mobile' => 'required|string|integer|digits:10',
            'password' => 'required|string|min:6|max:16',
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user-login')->with('success','User Register successfully');
    }


    public function userLogin(){
     return view('user.user-login');
    }



    public function userDashboard(Request $request){

        $query = Book::join('authors', 'books.author_id', '=', 'authors.id')
            ->select('books.id', 'authors.author_name', 'books.book_name', 'books.created_at', 'books.title');
    
        // Handle search query
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('books.book_name', 'LIKE', '%' . $search . '%')
                  ->orWhere('authors.author_name', 'LIKE', '%' . $search . '%')
                  ->orWhere('books.title', 'LIKE', '%' . $search . '%');
            });
        }
    
        $users = $query->paginate(10);
        return view('user.dashboard',compact('query','users'));
    }


    public function userLoginPost(Request $request)
    {
        // Validate email and password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt login with the default or custom guard
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Get authenticated user
            $user = auth()->user();
            
            // Redirect to the dashboard with success message
            return redirect()->route('user-dashboard')->with('success', 'You are Logged in Successfully');
        } else {
            // Redirect back to login with error message
            return redirect()->route('user-login')->with('error', 'Oops! Invalid Email or Password');
        }
    }
    
}
