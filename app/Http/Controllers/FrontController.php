<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $books=Product::all();

        return view('front.home',compact('books'));
    }
    public function books()
    {
        $books=Product::all();
        return view('front.books',compact('books'));
    }
    public function book()
    {
        return view('front.book');
    }
}
