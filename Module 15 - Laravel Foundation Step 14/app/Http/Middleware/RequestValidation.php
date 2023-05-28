<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RequestValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $validatedData = $request->validate( array(
            'name'     => 'required|string|min:2',
            'email'    => 'required|email',
            'password' => 'required|string|min:8',
        ) );

        if($validatedData){
            return $next($request);
        } else{
            return 'Registration Failed';
        }

    }
}
