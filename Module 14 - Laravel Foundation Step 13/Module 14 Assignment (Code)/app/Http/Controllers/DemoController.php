<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemoController extends Controller {
    // Question 1
    function DemoActionQ1( Request $request ): string{
        $name = $request->input( 'name' );
        return $name;
    }

    // Question 2
    function DemoActionQ2( Request $request ): string{
        $userAgent = $request->header( 'User-Agent' );
        return $userAgent;
    }

    // Question 3
    function DemoActionQ3( Request $request ) {
        $page = $request->query( 'page' ) ?? null;
        return $page;
    }

    // Question 4
    function DemoActionQ4(): JsonResponse{
        $msg  = "Success";
        $data = array( "name" => "John Doe", "age" => "25" );
        $code = 200;
        return response()->json( array( "message" => $msg, "data" => $data ), $code );
    }

    // Question 5
    function DemoActionQ5( Request $request ): string{
        $imgFile = $request->file( 'avatar' );
        $imgFile->move( public_path( 'uploads' ), $imgFile->getClientOriginalName() );
        return 'Upload Success!';
    }

    // Question 6
    function DemoActionQ6( Request $request ): string{
        $rememberToken = $request->cookie( 'remember_token' ) ?? null;
        return $rememberToken;
    }

    // Question 7
    function DemoActionQ7( Request $request ): JsonResponse{
        $email = $request->input( 'email' );

        if ( $email ) {
            return response()->json( array( "success" => "true", "message" => "Form submitted successfully." ) );
        } else {
            return response()->json( array( "success" => "false", "message" => "Form is not submitted." ) );
        }

    }

}
