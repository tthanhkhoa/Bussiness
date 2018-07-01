<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            $admin = Auth::guard($guard)->user();
            view()->share('admin', $admin);
            return $next($request);
        }
        $error_html = "<div class='alert alert-danger alert-dismissable fade in'>";
        $error_html .= "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        $error_html .= "<p align='center'>".trans('message.user_not_login') . "</p></div>";
        return redirect()->route('login')->with('error_html', $error_html);
    }
}
