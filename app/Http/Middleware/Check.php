<?php

namespace App\Http\Middleware;

use App\Models\Permissions;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routename = $request->route()->getName();

        if (Auth::check()) {
            if (Permissions::where('key', $routename)->first()) {
                $role = Auth::user()->roles->first();
                if (isset($role)) {
                    if ($role->permissions()->where('key', $routename)->exists() && $role->is_active == 1) {
                        return $next($request);
                    } else {
                        abort(403);
                    }
                }else{
                    abort(404);
                }

            } else {
                abort(404);
            }
        } else {
            return redirect('/login');
        }
    }
}
