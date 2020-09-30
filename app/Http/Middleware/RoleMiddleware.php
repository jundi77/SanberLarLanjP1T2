<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
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
        // Note: untuk selanjutnya coba ambil di db
        $permission = [
            'superadmin' => ["route-1", "route-2", "route-3"],
            'admin' => ["route-1", "route-2"],
            'guest' => ["route-1"]
        ];
        $user_role = Auth::user()->role_id;
        if(in_array($request->path(), $permission[$user_role]))
            return $next($request);
        abort(403);
    }
}
