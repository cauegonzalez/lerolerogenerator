<?php namespace App\Http\Middleware;

use Closure;

class AuthorizedMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->header("Token") !== "INSERT YOUR SECURE TOKEN IN HERE!!!")
        {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }

}
