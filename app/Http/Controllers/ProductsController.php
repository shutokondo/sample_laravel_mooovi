<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends RankingController
{
    public function index()
    {
        return view('products.index');
    }
}
