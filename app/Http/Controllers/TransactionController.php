<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('contents.transaction');
    }
}
