<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\IssueBook;
use App\Models\Student;
use Illuminate\Http\Request;

class LibrarianReturnBookController extends Controller
{
    public function index()
    {
        $data['students'] = Student::all();
        return view('librarian.return-book', $data);
    }

    public function return_search(Request $request)
    {
        $request->validate([
            'roll' => 'required|exists:students,roll',
        ]);

        $student = Student::where('roll', $request->roll)->first();

        return redirect()->route('return.book.show', $student->id);
    }

    public function return_book_show($student_id)
    {
        $data['student'] = Student::where('id', $student_id)->first();
        $data['issue_books'] = IssueBook::where('student_id', $student_id)->where('return_date', null)->get();

        return view('librarian.return-book-show', $data);
    }

    public function return_book(Request $request, $id)
    {
        $request->validate([
            'old_book_code' => 'required',
            'book_code' => 'required|same:old_book_code',
            'book_id' => 'required',
        ]);

        IssueBook::find($id)->update([
            'return_date' => date('Y-m-d h:i:s'),
        ]);

        $result = Book::find($request->book_id)->update([
            'status' => 1,
        ]);

        if($result){
            return back()->with('success','Book Return Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }
}
