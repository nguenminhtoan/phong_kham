<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!is_null(session()->get("admin"))) {
            return $next($request);
        }
        else{
            return redirect("/admin/login");
        }
        return abort(404);
    }
}
