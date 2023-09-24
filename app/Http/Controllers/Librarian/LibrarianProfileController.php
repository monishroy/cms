<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\IssueBook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibrarianProfileController extends Controller
{
    public function index()
    {
        $issue_book_count = IssueBook::where('return_date', null)->count();
        $books_count = Book::count();

        return view('librarian.profile', compact('issue_book_count', 'books_count'));
    }

    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required|min:11',
                'bio' => 'required',
            ]
        );

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->bio = $request->bio;
        $result = $user->save();

        if($result){
            return back()->with('success','Profile Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
