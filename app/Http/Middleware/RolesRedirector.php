<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolesRedirector
{
    /**
     * Handle an incoming request.
     * 
     * @return:return a redirection to the dashboard page of the user logged in
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $r, Closure $next): Response
    {
        $role = $r->session()->get('role');
        if($r->role === "organiser"){
            return redirect("/organisator")->with("error", "WRONG CREDENTIALS");
        }elseif($role === "admin"){
            return redirect("/admin")->with("error", "WRONG CREDENTIALS");
        }if($r->role === "client"){
            return redirect("/manageEvents")->with("error", "WRONG CREDENTIALS");
        }
        return $next($r);
    }
}
