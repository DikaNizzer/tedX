<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekTipe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        $user = Auth::user();

        //Uncomment jika ingin admin bisa mengakses apapun
        // if($user->type == 'admin')
        //     return $next($request);

        foreach($levels as $level) {
            // Check if user has the role This check will depend on how your roles are set up
            if($user->type == $level)
                return $next($request);
        }

        return redirect('/login');
    }
}
