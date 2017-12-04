<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $matches = \App\Event::orderBy('events.question_seve')->get();

        $locals = \App\Event::limit(3)->orderBy('events.question_seven')->get();

        $events = \App\Event:: all()->where('administrator', '=', \Auth::user()->id);


        return view('home', compact('events', 'locals'));
    }
}
