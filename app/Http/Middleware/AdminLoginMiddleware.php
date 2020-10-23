<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminLoginMiddleware
{

    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $listRoleOfUser = DB::table('role_user')->where('user_id', Auth::user()->id)->first();
            if ($listRoleOfUser != null) {
                return $next($request);
            } else {
                return redirect()->route('home')->with('warning', 'bạn không phải là admin');
            }
        } else {
            return redirect('login')->with('warning', 'bạn chưa đăng nhập');
        }
    }
}
