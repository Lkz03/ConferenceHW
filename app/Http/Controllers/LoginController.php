<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $request)
    {
        $user = User::Get()->
        where('name' , '=', $request->input('username'))->
        where('password' , '=', $request->input('password'));
        if(sizeof($user) > 0)
        {
            return redirect()->route('conference.index');
        } else {
            return redirect()->route('conference.guest');
        }
    }
}
