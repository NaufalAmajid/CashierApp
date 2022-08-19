<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contents.user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.user.adduser');
    }
}
