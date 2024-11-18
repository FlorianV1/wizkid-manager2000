<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Example: Retrieve user data to show on the dashboard
        $users = User::all();  // You can add more logic here as needed

        // Pass the data to the dashboard view
        return view('dashboard.index', compact('users'));
    }
}
