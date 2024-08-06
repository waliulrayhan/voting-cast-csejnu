<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('vote'); // Ensure you have a view named 'vote.blade.php'
    }
}
