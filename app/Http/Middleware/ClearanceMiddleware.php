<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use \Route;

class ClearanceMiddleware
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

        $route = $request->route()->getAction();// app('request')->route()->getAction();

        if ( str_starts_with( $route['as'], 'backpack' ) ) {
            return $next($request);
        }

        if ( backpack_user()->hasRole(['root']) ) {
            return $next($request);
        }

        $role_allowed  = backpack_user()->hasRole(['root', 'administrator']);
        $route_allowed = ( backpack_user()->hasPermissionTo($route['as'] ) );
        // dump ( $role_allowed );
        // dump ( $route_allowed );
        // dd ( ! ( $role_allowed && $route_allowed ) );

        if ( ! $role_allowed || ! $route_allowed ) {
            abort('401');
        }
        

        return $next($request);
    }

    public function list_all_crud_actions()
    {
        $controllers = [];
        foreach (Route::getRoutes()->getRoutes() as $route)
        {
            $action = $route->getAction();
            // dump($action);

            if ( ! ( $action['prefix'] == 'admin' && 
                ( isset( $action['as'] ) && ! str_starts_with( $action['as'], 'backpack' ) ) 
            ) )
                continue;

            $controllers[] = $action['as'];
        }

        dd($controllers);
    }
}

