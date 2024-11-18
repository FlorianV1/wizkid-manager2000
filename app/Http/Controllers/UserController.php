<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Show all users
    public function index()
    {
        $users = User::all();  // Retrieve all users
        return view('dashboard', compact('users'));  // Pass 'users' variable to the view
    }

    // Show a single user
    public function show($id)
    {
        $user = User::find($id);  // Retrieve a single user
        return view('users.show', compact('user'));  // Pass 'user' variable to the view
    }
}
