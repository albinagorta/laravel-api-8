<?php

namespace App\Http\Controllers\Api\V3;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);
    
        Post::create($request->all());
     
        return response()->json([
            'message' => 'success'
        ], 200);

    }

   
    public function show(Post $post)
    {
        //
    }

   
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    
    public function destroy(Post $post)
    {
        //
    }
}
