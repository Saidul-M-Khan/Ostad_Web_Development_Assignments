<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken as JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller {
    function UserSignup( Request $request ) {
        try {
            User::create( array(
                'name'     => $request->input( 'name' ),
                'email'    => $request->input( 'email' ),
                'password' => $request->input( 'password' ),
            ) );
            return response()->json( array(
                'status'  => 'success',
                'message' => 'User Registered Successfully',
            ), 200 );
        } catch ( Exception $e ) {
            return response()->json( array(
                'status'  => 'error',
                'message' => 'User Registration Failed',
            ), 401 );
        }

        // return User::create($request->input());
    }

    function UserLogin( Request $request ) {
        $userCount = User::where( 'email', '=', $request->input( 'email' ) )
            ->where( 'password', '=', $request->input( 'password' ) )
            ->count();

        if ( $userCount == 1 ) {
            // Issue JWT Token
            $token = JWTToken::CreateToken( $request->input( 'email' ) );
            return response()->json( array(
                'status'  => 'success',
                'message' => 'User Login Successful',
                'token'   => $token,
            ), 200 );
        } else {
            return response()->json( array(
                'status'  => 'error',
                'message' => 'User Login Failed',
            ), 401 );
        }

    }

    function SendOTPToEmail( Request $request ) {
        $email     = $request->input( 'email' );
        $otp       = rand( 100000, 999999 );
        $userCount = User::where( 'email', '=', $email )->count();

        if ( $userCount == 1 ) {
            // Send OTP To Users Email
            Mail::to( $email )->send( new OTPMail( $otp ) );
            // Update OTP To Table
            User::where( 'email', '=', $email )->update( array(
                'otp' => $otp,
            ) );
            return response()->json( array(
                'status'  => 'success',
                'message' => 'OTP Sent Successfully',
            ), 200 )->redirect( '/verify-otp', array( 'email', $email ) );
        } else {
            return response()->json( array(
                'status'  => 'error',
                'message' => 'OTP Send Failed',
            ), 401 );
        }

    }

    function VerifyOTP( Request $request ) {
        $email = $request->input( 'email' );
        $otp   = $request->input( 'otp' );
        $count = User::where( 'email', '=', $email )
            ->where( 'otp', '=', $otp )
            ->count();

        if ( $count == 1 ) {
            // OTP Update in Database
            User::where( 'email', '=', $email )
                ->where( 'otp', '=', '0' )
                ->update( array( 'otp' => $otp ) );

            // Issue a token to reset password
            $token = JWTToken::CreateTokenForResetPassword( $email );
            return response()->json( array(
                'status'  => 'success',
                'message' => 'OTP Verification Successful',
                'token'   => $token,
            ), 200 );
        } else {
            return response()->json( array(
                'status'  => 'error',
                'message' => 'Authentication Failed',
            ), 401 );
        }

        // return view( 'pages.otp-verification' );
    }

    function ResetPassword( Request $request ) {

        try {
            $email    = $request->header( 'email' );
            $password = $request->input( 'password' );
            User::where( 'email', '=', $email )->update( array( 'password' => $password ) );
            return response()->json( array(
                'status'  => 'success',
                'message' => 'Request Successful',
            ), 200 );

        } catch ( Exception $exception ) {
            return response()->json( array(
                'status'  => 'error',
                'message' => 'Something Went Wrong',
            ), 402 );
        }

    }

}
