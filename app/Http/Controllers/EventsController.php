<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createEvent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new \App\Event;

        $event->name = request('name');
        $event->description = request('description');
        $event->address = request('address');
        $event->zipcode = request('zipcode');
        $event->image = request('image');
        $event->question_two = request('question_two');
        $event->question_three = request('question_three');
        $event->question_four = request('question_four');
        $event->question_five = request('question_five');
        $event->question_six = request('question_six');
        $event->question_seven = request('question_seven');
        $event->question_eight = request('question_eight');
        $event->administrator = \Auth::user()->id;

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'image' => 'required',
            'question_two' => 'required',
            'question_three' => 'required',
            'question_four' => 'required',
            'question_five' => 'required',
            'question_six' => 'required',
            'question_seven' => 'required',
            'question_eight' => 'required'
        ]);


        $event->save();

        return redirect('/events'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
