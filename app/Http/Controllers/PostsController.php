<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate
                                    (
                                        [
                                            'caption' => 'required',
                                            'image' => 'required',
                                        ]
                                    );
        //$post = \App\Models\Post();
        //$post->caption = '';
        //$post->image = '';
        //$post->save();

        //\App\Models\Post::create($data);
        auth()->user()->posts()->create($data);

    }
}
