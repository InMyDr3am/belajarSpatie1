<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $post = Post::create($input);
        if($request->hasFile('cover') && $request->file('cover')->isValid()){
            $post->addMediaFromRequest('cover')->toMediaCollection('cover');
        }
        if($request->hasFile('pdf') && $request->file('pdf')->isValid()){
            $post->addMediaFromRequest('pdf')->toMediaCollection('pdf');
        }
        return redirect()->route('post');
    }
}
