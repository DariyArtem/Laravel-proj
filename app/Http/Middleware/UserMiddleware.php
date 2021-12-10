<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( Auth::check() && Auth::user()->isUser() ) // Проверка, авторизован ли пользователь, и присвоена ли ему роль "Администратор
        {
            // Если проверка пройдена, перебрасываем пользователя на главную страницу
            return redirect('/');

        }

        return $next($request); // Если проверка не пройдена, продолжаем работу
    }

    protected function isUser(Request $request){

        return false;
    }
}
