<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller {
    function getComments() {
        return Comment::select(
            "comments.id",
            "comments.content AS comment_content",
            "comments.created_at AS comment_created_at",
            "users.id AS user_id",
            "users.name AS user_name",
            "users.email AS user_email",
            "posts.id AS post_id",
            "posts.title AS post_title",
            "posts.content AS post_content",
            "posts.image AS post_image",
            "posts.created_at AS post_created_at"
        )
            ->join( "users", "comments.user_id", "=", "users.id" )
            ->join( "posts", "comments.post_id", "=", "posts.id" )
            ->get();
    }

    function getCommentById( Request $request ) {
        return Comment::select(
            "comments.id",
            "comments.content AS comment_content",
            "comments.created_at AS comment_created_at",
            "users.id AS user_id",
            "users.name AS user_name",
            "users.email AS user_email",
            "posts.id AS post_id",
            "posts.title AS post_title",
            "posts.content AS post_content",
            "posts.image AS post_image",
            "posts.created_at AS post_created_at"
        )
            ->join( "users", "comments.user_id", "=", "users.id" )
            ->join( "posts", "comments.post_id", "=", "posts.id" )
            ->where("comments.id", "=", $request->commentId)
            ->get();
    }

    function getCommentByPostId( Request $request ) {
        return Comment::select(
            "comments.id",
            "comments.content AS comment_content",
            "comments.created_at AS comment_created_at",
            "users.id AS user_id",
            "users.name AS user_name",
            "users.email AS user_email",
            "posts.id AS post_id",
            "posts.title AS post_title",
            "posts.content AS post_content",
            "posts.image AS post_image",
            "posts.created_at AS post_created_at"
        )
            ->join( "users", "comments.user_id", "=", "users.id" )
            ->join( "posts", "comments.post_id", "=", "posts.id" )
            ->where("comments.post_id", "=", $request->postId)
            ->get();
    }

    function getCommentsByUserId( Request $request ) {
        return Comment::select(
            "comments.id",
            "comments.content AS comment_content",
            "comments.created_at AS comment_created_at",
            "users.id AS user_id",
            "users.name AS user_name",
            "users.email AS user_email",
            "posts.id AS post_id",
            "posts.title AS post_title",
            "posts.content AS post_content",
            "posts.image AS post_image",
            "posts.created_at AS post_created_at"
        )
            ->join( "users", "comments.user_id", "=", "users.id" )
            ->join( "posts", "comments.post_id", "=", "posts.id" )
            ->where("comments.user_id", "=", $request->userId)
            ->get();
    }

    function getCommentsByPostIdAndUserId( Request $request ) {
        return Comment::select(
            "comments.id",
            "comments.content AS comment_content",
            "comments.created_at AS comment_created_at",
            "users.id AS user_id",
            "users.name AS user_name",
            "users.email AS user_email",
            "posts.id AS post_id",
            "posts.title AS post_title",
            "posts.content AS post_content",
            "posts.image AS post_image",
            "posts.created_at AS post_created_at"
        )
            ->join( "users", "comments.user_id", "=", "users.id" )
            ->join( "posts", "comments.post_id", "=", "posts.id" )
            ->where("comments.user_id", "=", $request->userId)
            ->where("comments.post_id", "=", $request->postId)
            ->get();
    }

    function addComment( Request $request ) {
        return Comment::create( $request->input() )->get();
    }

    function updateComment( Request $request ) {
        return Comment::where( "id", "=", $request->commentId )
        ->update( $request->input() );
    }

    function deleteComment( Request $request ) {
        return Comment::where( "id", "=", $request->commentId )->delete();
    }
}
