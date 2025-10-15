<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class BeforeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        App::setLocale(Session::get('locale', config('translatable.locale')));
        session()->put('locale', App::getLocale());
        $pages = \App\Models\Page::all();
        $count = \App\Models\ChMessage::where('to_id', 4)
            ->where('seen',0)
            ->groupBy('to_id')
            ->count();
        view()->share('pages', $pages);
        view()->share('count', $count);
        return $next($request);
    }
}
