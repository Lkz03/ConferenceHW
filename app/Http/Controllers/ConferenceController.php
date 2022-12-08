<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conference.index', ['conferences' => Conference::Get()]);
    }

    public function guest(): view
    {
        return view('conference.guest', ['conferences' => Conference::Get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conference.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conference = new Conference();

        $conference->title = $request->input('title');
        $conference->content = $request->input('content');

        $conference->save();

        return redirect()->route('conference.show', ['conference' => $conference->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('conference.show', ['conferences' => Conference::Get()->where('id', $id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('conference.edit',  ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        Conference::where('conference', $id)->
//        update(['title'=>$request->input('title')])->
//        update(['content'=>$request->input('content')]);

        $conference = Conference::findOrFail($id);
        $conference->fill($request->post());
        $conference->save();

        return view('conference.index', ['conferences' => Conference::Get()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        return back();
    }
}
