<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if ($request->user() == null) {
            return response("Nuk keni qasje ne kete faqe. Nder arsyet mund te jet se nuk jeni te kyqur", 401);
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;
        
        if ($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }
        return response("Nuk keni qasje ne kete faqe", 401);
    }
}
