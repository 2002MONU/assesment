<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function authordetails(Request $request)
    {
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
    
        return view('admin.authordetails', compact('users'));
    }
    

    public function addbook()
    {
        $users = Author::get();
        return view('admin.addbook', compact('users'));
    }
    public function addauthor()
    {
        return view('admin.addauthor');
    }

    public function authoradd(Request $request)
    {
        $request->validate([
            'author_name' => 'required|string',
            'designation' => 'required|string',
            'city' => 'required|string',
        ]);

        $user = new Author;
        $user->author_name = $request->author_name;
        $user->designation = $request->designation;
        $user->city = $request->city;
        $user->save();

        return redirect()->route('admin.author-details')->with('success', 'Author Add Successfully');
    }


    public function authdata(Request $request)
    {
        // Get the search term from the request
        $search = $request->input('search');

        // Check if there is a search term
        if ($search) {
            $users = Author::where('author_name', 'like', '%' . $search . '%')
                ->orWhere('city', 'like', '%' . $search . '%')
                ->get();
        } else {

            $users = Author::paginate(10);
        }

        return view('admin.author-details', compact('users', 'search'));
    }



    public function bookadd(Request $request)
    {
        $request->validate([
            'book_name' => 'required|string',
            'author_id' => 'required',
            'title' => 'required|string',
        ]);

        $author = new Book;
        $author->Book_name = $request->book_name;
        $author->title = $request->title;
        $author->author_id = $request->author_id;
        $author->save();

        return redirect('admin/authordetails')->with('success', 'Author Book Add Successfully');
    }


    public function delete($id)
    {
        $author = book::find($id);
        $author->delete();
        return redirect('admin/authordetails')->with('success', 'Delete Successfully');
    }

    public function update( $id)
    {
        $author =  Book::find($id);
        $users = Author::get();
        return view('admin.update', compact('author','users'));
    }

    public function updateauthor(Request $request, $id)
    {
        $request->validate([
            'book_name' => 'required',
            'title' => 'required',
        ]);

        $author = Book::find($id);
        $author->Book_name = $request->book_name;
        $author->title = $request->title;
        $author->author_id = $request->author_id;
        $author->save();

        return redirect('admin/authordetails')->with('success', "Book Update Successfully");
    }

    public function editAuthor($id){
        $author = Author::find($id);
      return view('admin.edit-author',compact('author'));

    }



      public function editAuthorPost(Request $request,$id){
        $request->validate([
            'author_name' => 'required|string',
            'designation' => 'required|string',
            'city' => 'required|string',
        ]);

        $user =  Author::find($id);
        $user->author_name = $request->author_name;
        $user->designation = $request->designation;
        $user->city = $request->city;
        $user->save();

        return redirect()->route('admin.author-details')->with('success', 'Author edit Successfully');
      }

      public function editAuthorDelete($id){
        Author::find($id)->delete();
        return redirect()->back()->with('success','Author delete successfully');
      }
}
