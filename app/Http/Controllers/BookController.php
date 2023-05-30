<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $topBooks = Book::orderBy('popularity', 'desc')->paginate(3);
        return view('user.index', compact('topBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get()->all();
        return view('dashboard.create', compact('category'));
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
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'isbn' => 'required',
            'synopsis' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'contentBook' => 'required|mimes:pdf'
            ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $pdf = $request->file('contentBook');
        $pdfName = time().rand().'.'.$pdf->extension();
        $request->contentBook->move(public_path('assets\pdf\ContentBook'), $pdfName);

        Book::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'category' => $request->category,
            'isbn' => $request->isbn,
            'synopsis' => $request->synopsis,
            'cover' => $imageName,
            'contentBook' => $pdfName,
            'popularity' => 0
        ]);

        return redirect('/book/data')->with('successBook', 'Successfully Creating Book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Book::where('id', $id)->first();
        return view('user.detail', compact('detail'));
    }

    /**


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::where('id', $id)->delete();
        return redirect()->back()->with('successDelete', 'Successfully Delete Data!');
    }


    public function Excel(){
        return Excel::download(new UsersExport, 'ebook.xlsx');
    }

    public function about(){
        return view('user.about');
    }
    public function book(){
        $categories = Category::all();
        $books = Book::all();
        return view('user.book', compact('books', 'categories'));
    }
    public function detail(){
        return view('user.detail');

    }
    public function allBook(){
        $books = Book::all();
        return view('dashboard.book_table', compact('books'));
    }

    public function cetakPDF($id){
        
        $book = Book::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();


        if ($user->download < 3 ){
            $book->increment('popularity');
            $user->increment('download');
            return response()->download('assets/pdf/ContentBook/'. $book->contentBook);
        }else{
            return redirect('/dashboard')->with('error', 'Anda sudah lebih dari 3 kali mendownload buku hari ini!');
        }
          
    }
}
