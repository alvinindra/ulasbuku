<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Review;
use Validator;

class ReviewController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
      
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
        $input = $request->all();

        $validator = Validator::make($input, [
            'id_book' => 'required',
            'slug'  => 'required',
            'review_content' => 'required',
            'rating' => 'required',
        ]);
   
        if($validator->fails()){
            return response()
            ->json([
                'status' => 'error',
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);  
        }

        $review = Review::firstOrNew([
            'id_book' => $request->id_book,
            'slug'    => $request->slug,
            'id_user' => auth('sanctum')->user()->id,
        ]);

        $review->review_content = $request->review_content;
        $review->rating = $request->rating;
        $review->created_at = Carbon::now();
        $review->updated_at = Carbon::now();
        $review->save();

        return response()->json([
            "success" => true,
            "message" => "Data berhasil ditambahkan",
            "data" => $review
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $auth = auth('sanctum')->user();
        $review = Review::where('slug', $slug)
        ->when($auth, function($q) use ($auth) {
            $q->where('id_user', $auth->id);
        })->first();

        if (is_null($review)) {
          return $this->sendResponse([], 'Data masih kosong');
        }

        return response()->json([
            "success" => true,
            "message" => "Data berhasil ditemukan",
            "data" => $review
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $slug)
    {
        $input = $request->all();
        $user = auth('sanctum')->user();

        $validator = Validator::make($input, [
            'review_content' => 'required',
            'rating' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $review = Review::where('slug', $slug)->where('id_user', $user->id);
        $review->update([
            'review_content' => $request->review_content,
            'rating' => $request->rating,
            'updated_at' => Carbon::now(),
        ]);

        $getReview = Review::where('slug', $slug)->where('id_user', $user->id)->first();

        return $this->sendResponse($getReview, 'Review berhasil diubah');
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
