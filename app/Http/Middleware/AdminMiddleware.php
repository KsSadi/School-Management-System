<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('admin')->user()) {
            auth('web')->logout();
            auth('organizer')->logout();

          /*  auth('buyer')->logout();
            auth('seller')->logout();
            auth('employee')->logout();*/
            return $next($request);
        }else{
            return redirect()->route('dashboard.login');
        }
    }
}
