<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;


class LanguageMiddleware
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
        if (Session::has('appLocale')) $lang = Session::get('appLocale');
        else $lang = Config::get('app.fallback_locale');

        App::setLocale($lang);

        return $next($request);

    }
}
