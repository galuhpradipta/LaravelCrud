<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Http\Resources\Review as ReviewResource;
use App\Https\Requests;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Articles 
        $reviews = Review::paginate(15);

        return ReviewResource::collection($reviews);
 
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
        $review = new Review;

        $review->order_id = $request->input('order_id');
        $review->product_id = $request->input('product_id');
        $review->user_id = $request->input('user_id');
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');

        if($review->save()) {
            return new ReviewResource($review);
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
        // Get singgle review
        $review = Review::findOrFail($id);

        return new ReviewResource($review);
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
        $review = Review::findOrFail($id);

        $review->order_id = $request->input('order_id');
        $review->product_id = $request->input('product_id');
        $review->user_id = $request->input('user_id');
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');

        if($review->save()) {
            return new ReviewResource($review);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get singgle review
        $review = Review::findOrFail($id);
        
        if($review->delete()) {
            return new ReviewResource($review);
        }

    }
}
