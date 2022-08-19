<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contents.product');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('components.product.addproduct');
    }
}
