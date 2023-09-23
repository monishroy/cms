<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Department;
use App\Models\IssueBook;
use App\Models\Semister;
use App\Models\Student;
use Illuminate\Http\Request;

class LibrarianBooksIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issue_books = IssueBook::all();
        return view('librarian.issue-books', compact('issue_books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $user_id = 1;
        $books = Book::all()->where('status', 1);
        return view('librarian.add-issue-book', compact('students','books','user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'student' => 'required|exists:users,id',
                'book' => 'required|exists:books,id',
            ]
        );

        $issue_date = date('Y-m-d h:i:s');

        $result = IssueBook::create([
            'student_id' => $request->student,
            'book_id' => $request->book,
            'issue_date' => $issue_date,
        ]);

        $result = Book::find($request->book)->update([
            'status' => 0,
        ]);
        if($result){
            return back()->with('success','Book Issue Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
