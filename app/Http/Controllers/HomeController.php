<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Seongbae\Discuss\DiscussFacade;
//use \Seongbae\Discuss\Discuss;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $topics = DiscussFacade::getThreads();

        return view('home', compact('topics'));
    }
}
