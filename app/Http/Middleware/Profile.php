<?php

namespace App\Http\Middleware;

use Closure;


class Profile
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
        $article = \App\Profile::find($request->parameter('id'));

        if ($article->user_id != Auth::user()->id)
        {
            abort(404);
        }
        return $next($request);
    }
}
