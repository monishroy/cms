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
        $data['issue_book_count'] = IssueBook::where('return_date', null)->count();
        $data['books_count'] = Book::count();

        return view('librarian.profile', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:11',
            'bio' => 'required',
        ]);

        $result = User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);

        if($result){
            return back()->with('success','Profile Update Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
