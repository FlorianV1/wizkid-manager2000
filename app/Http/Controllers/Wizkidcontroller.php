<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wizkidcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:staff');
    }

    public function index()
    {
        return view('wizkids.index');
    }

    public function show()
    {
        return view('wizkids.show');
    }
    public function create()
    {
        return view('wizkids.create');
    }
    public function edit()
    {
        return view('wizkids.edit');
    }
    public function delete()
    {
        return view('wizkids.delete');
    }
}
