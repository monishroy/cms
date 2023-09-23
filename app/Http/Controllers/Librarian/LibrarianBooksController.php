<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Department;
use App\Models\IssueBook;
use App\Models\Semister;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibrarianBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::where('status', 1)->get();
        return view('librarian.books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('books.store');
        $title = 'Add Book';
        $semister = Semister::all();
        $department = Department::all();
        
        return view('librarian.add-book', compact('url','title','semister','department'));
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
                'name' => 'required|min:3',
                'image' => 'mimes:png,jpg,jpeg',
                'subject_code' => 'required',
                'book_code' => 'required|unique:books,book_code',
                'probidhan' => 'required',
                'publication' => 'required',
                'semister' => 'required',
                'department' => 'required',
            ]
        );

        if($request->image){

            $imageName = rand(1111, 9999).time()."-book.".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/books',$imageName);
                
            $result = Book::create([
                'name' => $request->name,
                'image' => $imageName,
                'subject_code' => $request->subject_code,
                'book_code' => $request->book_code,
                'probidhan' => $request->probidhan,
                'publication' => $request->publication,
                'user_id' => Auth::user()->id,
                'semister_id' => $request->semister,
                'department_id' => $request->department,
            ]);
        }else{
            $result = Book::create([
                'name' => $request->name,
                'subject_code' => $request->subject_code,
                'book_code' => $request->book_code,
                'probidhan' => $request->probidhan,
                'publication' => $request->publication,
                'user_id' => Auth::user()->id,
                'semister_id' => $request->semister,
                'department_id' => $request->department,
            ]);
        }

        if($result){
            return back()->with('success','Book Add Successfully');
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
        $book = Book::where('id', $id)->first();
        $url = route('books.update', $id);
        $title = 'Update Book';
        $semister = Semister::all();
        $department = Department::all();

        return view('librarian.add-book', compact('book','url','title','semister','department'));
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
        $request->validate(
            [
                'name' => 'required|min:3',
                'subject_code' => 'required',
                'book_code' => 'required|exists:books,book_code',
                'probidhan' => 'required',
                'publication' => 'required',
                'semister' => 'required',
                'department' => 'required',
                'book_code' => 'required',
            ]
        );

        if($request->image){

            $imageName = date('dmY').time()."-book.".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/books',$imageName);

            $result = Book::find($id)->update([
                'name' => $request->name,
                'image' => $imageName,
                'subject_code' => $request->subject_code,
                'book_code' => $request->book_code,
                'probidhan' => $request->probidhan,
                'publication' => $request->publication,
                'user_id' => Auth::user()->id,
                'semister_id' => $request->semister,
                'department_id' => $request->department,
            ]);
        }else{
            $result = Book::find($id)->update([
                'name' => $request->name,
                'subject_code' => $request->subject_code,
                'book_code' => $request->book_code,
                'probidhan' => $request->probidhan,
                'publication' => $request->publication,
                'user_id' => Auth::user()->id,
                'semister_id' => $request->semister,
                'department_id' => $request->department,
            ]);
        }

        
        
        if($result){
            return back()->with('success','Book Update Successfully');
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
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('success','Book Delete Successfully');
    }

    public function return_index()
    {
        $students = Student::all();
        return view('librarian.return-book', compact('students'));
    }

    public function student_search(Request $request)
    {
        $request->validate([
            'roll' => 'required|exists:students,roll',
        ]);

        $student = Student::where('roll', $request->roll)->first();

        return redirect()->route('books.return.show', $student->id);
    }

    public function return_book_show($student_id)
    {
        $student = Student::where('id', $student_id)->first();
        $issue_books = IssueBook::where('student_id', $student_id)->where('return_date', null)->get();
        return view('librarian.return-book-show', compact('student','issue_books'));
    }
}
;