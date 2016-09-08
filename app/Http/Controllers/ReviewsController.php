<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReviewsController extends RankingController
{
    public function create($id)
    {
        $product = Product::find($id);
        $review = new Review();

        return('reviews.create')->with(array('product' => $product, 'review' => $review));
    }

    public function store()
    {
        // Review::create()
        // トップページにリダイレクトする
    }
}
