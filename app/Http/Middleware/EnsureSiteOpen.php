<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSiteOpen
{
    /**
     * Blocks public access when the site is "closed" by a super admin.
     * Logged-in admins can still browse so they can preview / manage.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Setting::isSiteClosed() && ! $request->user()) {
            return response()->view('maintenance', [], 503);
        }

        return $next($request);
    }
}
