<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    function getProfiles() {
        return Profile::with('users')->get();
    }

    function getProfileByUserId( Request $request ) {
        return Profile::find( $request->userId );
    }

    function addProfile( Request $request ) {
        return Profile::create( $request->input() );
    }

    function createOrUpdateProfileByUserId( Request $request ) {
        return Profile::updateOrCreate(
            ['user_id'=>$request->userId],
            $request->input()
        );
    }

    function deleteProfileByUserId( Request $request ) {
        return Profile::where( 'user_id', '=', $request->userId )->delete();
    }
}
