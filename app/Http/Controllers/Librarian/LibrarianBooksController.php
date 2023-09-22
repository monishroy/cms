<?php

namespace App\Http\Controllers\Librarian;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Department;
use App\Models\Semister;
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
        $books = Book::all();
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
                'book_code' => 'required',
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
                'book_code' => 'required',
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
}
