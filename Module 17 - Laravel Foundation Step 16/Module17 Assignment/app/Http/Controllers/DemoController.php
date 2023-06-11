<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DemoController extends Controller {
    // Question 2 Code
    function question2() {
        $posts = DB::table( 'posts' )
            ->select( 'excerpt', 'description' )
            ->get();
        return $posts;
    }

    // Question 4 Code
    function question4() {
        $posts = DB::table( 'posts' )
            ->select( 'description' )
            ->where( 'id', 2 )
            ->first()
            ->get();
        return $posts;
    }

    // Question 5 Code
    function question5() {
        $posts = DB::table( 'posts' )
            ->select( 'description' )
            ->where( 'id', 2 )
            ->get();
        return $posts;
    }

    // Question 7 Code
    function question7() {
        $posts = DB::table( 'posts' )
            ->select( 'title' )
            ->where( 'id', 2 )
            ->get();
        return $posts;
    }

    // Question 8 Code
    function question8() {
        $insertedPosts = DB::table( 'posts' )
            ->insert( array(
                "title"        => "X",
                "slug"         => "X",
                "excerpt"      => "excerpt",
                "description"  => "description",
                'is_published' => true,
                'min_to_read'  => 2,
            ) );
        return $insertedPosts;
    }

    // Question 9 Code
    function question9() {
        $updatePosts = DB::table( 'posts' )
            ->where( 'id', 2 )
            ->update( array(
                "excerpt"     => "Laravel 10",
                "description" => "Laravel 10",
            ) );
        return $updatePosts;
    }

    // Question 10 Code
    function question10() {
        $affectedRows = DB::table( 'posts' )
            ->where( 'id', 3 )
            ->delete();
        return $affectedRows;
    }

    // Question 11 Code
    function question11() {
        $count = DB::table( 'users' )->count(); // count()
        $sum   = DB::table( 'sales' )->sum( 'amount' ); // sum()
        $avg   = DB::table( 'products' )->avg( 'price' ); // avg()
        $max   = DB::table( 'scores' )->max( 'score' ); // max()
        $min   = DB::table( 'temperatures' )->min( 'temperature' ); // min()
        return array( 'count' => $count, 'sum' => $sum, 'avg' => $avg, 'max' => $max, 'min' => $min );
    }

    // Question 12 Code
    function question12() {
        $posts = DB::table( 'posts' )
            ->whereNot( 'id', 2 )
            ->get();
        return $posts;
    }

    // Question 14 Code
    function question14() {
        $posts = DB::table( 'posts' )
            ->whereBetween( 'min_to_read', array( 1, 5 ) )
            ->get();
        return $posts;
    }

    // Question 15 Code
    function question15() {
        $affectedRows = DB::table( 'posts' )
            ->where( 'id', 3 )
            ->increment( 'min_to_read' );
        return $affectedRows;
    }
}
