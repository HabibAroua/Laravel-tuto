<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index()
    {
        $x = 2;
        if($x == 2)
            return view('home');
        else
            return view('welcome');
    }
}
