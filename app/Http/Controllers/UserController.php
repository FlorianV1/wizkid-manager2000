<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    public function edit(User $user)
    {
        return view('wizkids.edit', ['wizkid' => $user]);
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('dashboard', $user)->with('success', 'User updated successfully');
    }
}
