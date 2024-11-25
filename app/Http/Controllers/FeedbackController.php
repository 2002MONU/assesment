<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'feedback' => 'required|string|max:500',
            'book_name' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
        ]);
    
        // Get the logged-in user's email
        $usermail = auth()->user()->email;
    
        $feedback = new Feedback();
        $feedback->rating = $request->rating;
        $feedback->feedback = $request->feedback;
        $feedback->author_name = $request->author_name;
        $feedback->book_name = $request->book_name;
        $feedback->useremail = $usermail;
        $feedback->save();
        // Redirect with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
    
}
