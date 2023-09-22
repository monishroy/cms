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
        $books = Book::all()->where('status', 1);
        return view('librarian.add-issue-book', compact('students','books'));
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
                'user_id' => 'required|exists:users,id',
                'book_id' => 'required|exists:books,id',
                'issue_date' => 'required|date',
            ]
        );

        $date_time = date('Y-m-d', strtotime($request->issue_date));

        $result = IssueBook::create([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'issue_date' => $date_time,
        ]);

        $result = Book::find($request->book_id)->update([
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
        //
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
