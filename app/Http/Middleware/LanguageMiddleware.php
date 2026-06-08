<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            Session::put('locale', $locale);
        }
        // Jika tidak, ambil dari session atau default 'id'
        else {
            $locale = Session::get('locale', 'id');
        }

        // Set bahasa aplikasi
        App::setLocale($locale);

        return $next($request);
    }
}
