<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use \App\Models\User;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([
        'caption'=>'required',
        'image'=>['required', 'image'] 
        ]);

        //auth()->user()->posts()->create($data);
        dd(request()->all());
        
        
    }
}
