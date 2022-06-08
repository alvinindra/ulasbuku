<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::with('category','author','publisher')->get();
        return view('book.index',compact('book'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $author = Author::all();
        $publisher = Publisher::all();

        return view('book.create',compact('category','author','publisher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
            'id_category'=>'required',
            'id_author'=>'required',
            'id_publisher'=>'required',
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->description = $request->description;
        if ($request->hasFile('cover')){
            $file = $request->file('cover');
            $destinationPatch = public_path().'/assets/img/cover/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $book->cover = $filename;
        }
        $book->id_category = $request->id_category;
        $book->id_author = $request->id_author;
        $book->id_publisher = $request->id_publisher;
        $book->save();

        return redirect()->route('book.index')->with('succes','Data Berhasil di Input');;
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
     $book = Book::findOrFail($id);
     $category = Category::all();
     $author = Author::all();
     $publisher = Publisher::all();

     return view('book.edit', compact('book','category','author','publisher'));
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
        $this->validate($request, [
            'title'=>'required',
            'description'=>'required',
            'id_category'=>'required',
            'id_author'=>'required',
            'id_publisher'=>'required',
        ]);

        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->description = $request->description;
        if ($request->hasFile('cover')){
            $file = $request->file('cover');
            $destinationPatch = public_path().'/assets/img/cover/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

            if ($book->cover) {
                $old_cover = $book->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/cover'
                . DIRECTORY_SEPARATOR . $book->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $book->cover = $filename;
        }
        $book->id_category = $request->id_category;
        $book->id_author = $request->id_author;
        $book->id_publisher = $request->id_publisher;
        $book->save();

        return redirect()->route('book.index')->with('succes','Book Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('book.index')->with('succes','Book Berhasil di Hapus');
    }
}
