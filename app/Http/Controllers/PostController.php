<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // return view('muro');
        // dd(auth()->user());

        //return view('dashboard');
        return view('dashboard');
    }
}
// pass sdf9sad8f9asd8fu98sdf9s8dfu9asd8fa  