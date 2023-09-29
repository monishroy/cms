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
        $data['books'] = Book::where('status', 1)->get();
        return view('librarian.books', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['url'] = route('books.store');
        $data['title'] = 'Add Book';
        $data['semister'] = Semister::all();
        $data['department'] = Department::all();
        
        return view('librarian.add-book', $data);
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
            'name' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'subject_code' => 'required',
            'book_code' => 'required|unique:books,book_code',
            'probidhan' => 'required',
            'publication' => 'required',
            'semister' => 'required',
            'department' => 'required',
        ]);

        if(is_file($request->image)){

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
        $data['book'] = Book::where('id', $id)->first();
        $data['url'] = route('books.update', $id);
        $data['title'] = 'Update Book';
        $data['semister'] = Semister::all();
        $data['department'] = Department::all();

        return view('librarian.add-book', $data);
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
            'name' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
            'subject_code' => 'required',
            'book_code' => 'required|exists:books,book_code',
            'probidhan' => 'required',
            'publication' => 'required',
            'semister' => 'required',
            'department' => 'required',
            'book_code' => 'required',
        ]);

        if(is_file($request->image)){

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
        $result = $book->delete();

        if($result){
            return back()->with('success','Book Delete Successfully');
        }else{
            return back()->with('error','Something is Worng!');
        }
        
    }
    
}