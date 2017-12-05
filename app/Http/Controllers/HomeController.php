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


        $originalmatches = \App\questions:: all()->where('user', '=', \Auth::user()->id);

        $matches = [];

        foreach ($originalmatches as $original) {
            array_push($matches, $original->question_six);
        }

        $matches = array_unique($matches);

        // $matches->firstWhere($allevents->question_six, '===', );

        $allevents = \App\Event:: all();

        $locals = \App\Event::limit(3)->orderBy('events.question_seven')->get();

        $events = \App\Event:: all()->where('administrator', '=', \Auth::user()->id);


        return view('home', compact('events', 'locals', 'matches', 'allevents'));
    }
}
