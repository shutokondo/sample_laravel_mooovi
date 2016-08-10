<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReviewsController extends RankingController
{
    public function create()
    {
        $product = Product::find($id);
        $review = new Review();
    }

    public function store()
    {
        // Review::create()
        // トップページにリダイレクトする
    }
}
