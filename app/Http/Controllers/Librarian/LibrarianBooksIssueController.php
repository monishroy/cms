<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\IssueBook;
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
        $data['issue_books'] = IssueBook::all();

        return view('librarian.issue-books', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('librarian.issue-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputs.*.student' => 'required|exists:users,id',
            'inputs.*.book_code' => 'required|exists:books,book_code',
        ],
        [
            'inputs.*.student.required' => 'The student field is required',
            'inputs.*.book_code.required' => 'The book code field is required',
            'inputs.*.book_code.exists' => 'The book not found',
        ]);

        $issue_date = date('Y-m-d h:i:s');

        foreach ($request->inputs as $value) {

            $student_id = $value['student'];

            $book = Book::where('book_code', $value['book_code'])->first();
            $book_id = $book->id;

            IssueBook::create([
                'student_id' => $student_id,
                'book_id' => $book_id,
                'issue_date' => $issue_date,
            ]);

            $result = Book::findOrFail($book_id)->update([
                'status' => 0,
            ]);
        }
        
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

    public function issue_search(Request $request)
    {
        $request->validate([
            'roll' => 'required|exists:students,roll',
        ]);

        $student = Student::where('roll', $request->roll)->first();

        return redirect()->route('issue.book.show', $student->id);
    }

    public function issue_book_show($student_id)
    {
        $data['books'] = Book::where('status', 1)->get();
        $data['student'] = Student::where('id', $student_id)->first();
        
        return view('librarian.issue-book-show', $data);
    }
}
