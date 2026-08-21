<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeaders
{
    /**
     * CSP en modo "solo avisar": no bloquea nada, solo hace que el navegador
     * mande un reporte a /csp-report cada vez que algo violaría esta política.
     * Se usa 'self' en default-src a propósito, sin ninguna excepción, para
     * detectar en una sola pasada todo lo que el sitio carga desde afuera
     * (CDNs) o de forma inline, antes de armar la política real.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set(
            'Content-Security-Policy-Report-Only',
            "default-src 'self'; report-uri /csp-report;"
        );

        return $response;
    }
}
