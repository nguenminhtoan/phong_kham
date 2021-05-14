<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->get("admin")->id_nguoidung == 1) {
            return $next($request);
        }
        else{
            return redirect("/admin/news");
        }
        return abort(404);
    }
}
