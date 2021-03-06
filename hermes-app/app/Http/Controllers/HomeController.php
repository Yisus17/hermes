<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\SoloAdmin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {  
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only' =>['index', 'about']]); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home-admin');
    }

    public function about(){
        return view('about');
    }
}
