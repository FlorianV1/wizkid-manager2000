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

    public function store(Request $request)
    {
        // Validate the request...
        $validated = $request->validate([
            'name' => 'required|unique:wizkids|max:255',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $wizkid = new Wizkidcontroller;

        $wizkid->name = $validated['name'];
        $wizkid->email = $validated['email'];
        $wizkid->roll = $validated['roll'];

        $wizkid->save();

        return redirect('/wizkids');
    }
}
