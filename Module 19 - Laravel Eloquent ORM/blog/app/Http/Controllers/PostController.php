<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function blogPage(){
        return view('pages.blog');
    }

    function postPage(Request $request){
        $postId = $request->postId;
        return view('pages.post', ['postId'=>$postId]);
    }

    function getPosts(){
        return Post::with('tags', 'comments')->get();
    }

    function getPostById(Request $request){
        return Post::with('tags', 'comments')->find($request->postId);
    }

    function getPostsByUserId(Request $request){
        return Post::with('tags', 'comments')->where('user_id', $request->userId)->get();
    }

    function addPost(Request $request){
        return Post::create($request->input())
            ->tags()->attach($request->input('tags'));
    }

    function updatePost(Request $request){
        return Post::where('id', $request->postId)->update($request->input());
    }

    function deletePost(Request $request){
        return Post::where('id', '=' , $request->postId)->delete();
    }
}
