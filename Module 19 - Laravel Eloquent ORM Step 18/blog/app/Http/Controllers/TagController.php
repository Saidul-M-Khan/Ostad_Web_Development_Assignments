<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller {
    function getTags() {
        return Tag::with('posts')->get();
    }

    function getTagsByPostId( Request $request ) {
        return Tag::with('posts')->find($request->tagId);
    }

    function addTag( Request $request ) {
        return Tag::create( $request->input() );
    }

    function updateTag( Request $request ) {
        return Tag::where( 'id', $request->userId )->update( $request->input() );
    }

    function deleteTag( Request $request ) {
        return Tag::where( 'id', '=', $request->userId )->delete();
    }
}
