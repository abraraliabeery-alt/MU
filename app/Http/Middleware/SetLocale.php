<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->query('lang');

        if (is_string($lang)) {
            $lang = strtolower(trim($lang));
        }

        if ($lang === 'ar' || $lang === 'en') {
            $request->session()->put('lang', $lang);
        }

        $sessionLang = $request->session()->get('lang');
        if ($sessionLang === 'ar' || $sessionLang === 'en') {
            app()->setLocale($sessionLang);
        }

        return $next($request);
    }
}
