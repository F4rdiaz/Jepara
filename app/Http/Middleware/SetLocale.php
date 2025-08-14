<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil locale dari session, jika tidak ada gunakan default app locale
        $locale = Session::get('locale', config('app.locale', 'en'));
        App::setLocale($locale);

        return $next($request);
    }
}
