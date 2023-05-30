<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $topBook = Ebook::orderBy('popularity', 'desc')->paginate(3)->toArray();
        
        return view('HomePage.index', compact('topBook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function dashboard(Request $request){
        $ebook = Ebook::query();
        $ebook->when($request->nameCategory, function ($query) use ($request){
            return $query->where('nameCategory', 'like', '%'. $request->nameCategory, '%');
        });
        $catNav = Category::all();
        $book = Ebook::all();
      
        return view('HomePage.dashboard', compact('catNav', 'book'));
    }

    public function readMore(){
        return view('HomePage.readMore');
    }

    public function exportExcel(){
        return Excel::download(new UsersExport, 'ebook.xlsx');
    }

    public function makeCategory(){

        return view('AdminPage.makeCategory');
    }

    public function cetakPDF($id){
        
        $book = Ebook::where('id', $id)->first();
        $user = User::where('id', Auth::user()->id)->first();


        if ($user->download < 3 ){
            $book->increment('popularity');
            $user->increment('download');
            return response()->download('assets/pdf/Content Book/'. $book->contentBook);
        }else{
            return redirect('/dashboard')->with('error', 'Anda sudah lebih dari 3 kali mendownload buku hari ini!');
        }
        




        
    }


    public function addBook(){
        $book = Ebook::get();
        $category = Category::all();
        return view('AdminPage.addBook', compact('book', 'category'));
    }

    public function addAuth(Request $request){
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'isbnNumber' => 'required|min:8',
            'synopsis' => 'required|min:20',
            'nameCategory' => 'required',
            'bookCover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'contentBook' => 'required|mimes:pdf'
        ]);

        $image = $request->file('bookCover');
        $imgName = time().rand().'.'.$image->extension();
        $request->bookCover->move(public_path('assets\img\BookCover'), $imgName);

        $pdf = $request->file('contentBook');
        $pdfName = time().rand().'.'.$pdf->extension();
        $request->contentBook->move(public_path('assets\pdf\Content Book'), $pdfName);

        Ebook::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'isbnNumber' => $request->isbnNumber,
            'synopsis' => $request->synopsis,
            'bookCover' => $imgName,
            'contentBook' => $pdfName,
            'nameCategory' => $request->nameCategory,
            'popularity' => 0
        ]);
        
        return redirect('/addBook');
    }

    public function detailBook($id){
        $detail = Ebook::where('id', $id)->first();
        return view('HomePage.detailBook', compact('detail'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $request->validate([
            'nameCategory' => 'required'
        ]);

        Category::create([
            'nameCategory' => $request->nameCategory,
        ]);

        return redirect('/makeCategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function show(Ebook $ebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Ebook $ebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ebook $ebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ebook  $ebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ebook $ebook)
    {
        //
    }
}
