<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); //this function redirect to 404 page if the user is not exist
        //$user = (User::find($user));
        return  view
                (
                'home',
                    [
                        'user' => $user,
                    ]
                );
    }
}
