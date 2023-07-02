<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    function getPostData() {
        return Post::all();
        // $posts = Post::with('categories')->get();
        // return $posts;
    }

    function getAllPosts() {
        // return Post::all();
        $posts = Post::join( 'categories', 'posts.category_id', '=', 'categories.id' )
            ->select( 'posts.title', 'posts.description', 'categories.name' )
            ->get();
        return $posts;
    }

    function getPosts() {
        // return Post::all();
        $posts = Post::with( 'categories' )->get();
        return view( 'Posts.index', compact( 'posts' ) );
    }

    function getPostCountByCategory( Request $request ) {
        $catId = $request->categoryId;
        $count = Post::where( 'category_id', $catId )->count();
        return $count;
    }

    public function postDelete( Request $request ) {
        $postDeleted = Post::where( 'id', '=', $request->id )->delete();
        return $postDeleted;
    }

    function getPostsByCategory( Request $request ) {
        $categoryId = $request->id;

        $posts = Post::join( 'categories', 'posts.category_id', '=', 'categories.id' )
            ->select( 'posts.title', 'posts.description', 'categories.name' )
            ->where( 'category_id', $categoryId )
            ->get();

        return view( 'PostsByCategory.index', compact( 'posts' ) );
    }

    function getLatestPosts( Request $request ) {
        $catId    = $request->categoryId;
        $category = Post::find( $catId );
        $posts    = $category->latestPost();

        return view( 'PostsByCategory.index', compact( 'posts' ) );
    }

}
