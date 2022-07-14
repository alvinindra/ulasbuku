<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\BookResource as BookResource;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Carbon;

class BooksController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $perPage = $request->perPage ? intval($request->perPage) : 12;
        $booksQuery = (new Book())->query();
        $booksQuery->withAvg('reviews as total_rating', 'rating');
        $booksQuery->withCount('reviews as total_reviews');
        $booksQuery->with('author:id,name_author');
        $booksQuery->with('category:id,name_category');
        $booksQuery->when($request->search, function($q) use ($request) {
            $q->where('title','like',"%{$request->search}%");
        })->when($request->filter === 'latest', function($q) {
            $q->orderBy('created_at', 'desc');
        })->when($request->filter === 'oldest', function($q) {
            $q->orderBy('created_at', 'asc');
        })->when($request->filter === 'most_popular', function($q) {
            $q->orderBy('total_reviews', 'desc');
        })->when($request->category, function($q) use ($request) {
            $q->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        });

        $books = $booksQuery->paginate($perPage)->withQueryString();

        //make response JSON
        return $this->sendResponse($books, 'Data berhasil ditampilkan');
    }

    /**
     * Display a listing of the resource review.
     *
     * @return \Illuminate\Http\Response
     */
    public function listReviews($slug)
    {   
        $book = Review::where('slug', $slug)
        ->with('user:id,name')
        ->paginate(12)
        ->withQueryString();
        //make response JSON
        return $this->sendResponse($book, 'Data berhasil ditampilkan');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = auth('sanctum')->user();
        $book = Book::where('slug', $slug)
        ->withAvg('reviews as total_rating', 'rating')
        ->withCount('reviews as total_reviews')
        ->with('author:id,name_author')
        ->with('is_reviewed', function($q) use ($slug) {
            $q->where('slug', $slug);
        })->first();

        if (is_null($book)) {
            return $this->sendError('Buku tidak ditemukan.');
        }

        return response()->json([
            "success" => true,
            "message" => "Data berhasil ditemukan",
            "data" => $book
        ]);
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
