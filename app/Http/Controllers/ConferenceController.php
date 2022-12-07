<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    protected array $articles = [
        [
            'title' => 'das is title',
            'content' => 'some text'
        ],
        [
            'title' => 'das is title but different',
            'content' => 'some text'
        ]
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('conference.index', ['articles' => Conference::Get()]);
    }

    public function guest(): view
    {
        return view('conference.guest', ['articles' => Conference::Get()]);
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
        return view('conference.show', ['articles' => Conference::Get()->where('id', $id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('conference.edit');
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
        Conference::where('conference', $id)->
        update(['title'=>$request->input('title')])->
        update(['content'=>$request->input('content')]);

        return view('conference.index', ['articles' => Conference::Get()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Conference::where('conference', $id)->delete();

        return view('conference.index', ['articles' => Conference::Get()]);
    }
}
