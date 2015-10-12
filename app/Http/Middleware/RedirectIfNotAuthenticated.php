<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfNotAuthenticated
{

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $path = $request->getPathInfo();
        if ($this->auth->check()||$path==('/crm/login')||$path==('/crm/register')) {
        }
        else{
            return redirect('/crm/login');
        }
        return $next($request);
    }

}