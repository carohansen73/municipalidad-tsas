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

        // HSTS: max-age corto (1 día) a propósito, mientras se confirma que
        // todo el sitio anda bien 100% en HTTPS. Solo se manda si la visita
        // ya llegó por HTTPS (si no, el navegador lo ignoraría igual).
        if ($request->secure()) {
            $response->headers->set('Strict-Transport-Security', 'max-age=86400');
        }

        // Evita que el navegador "adivine" el tipo de un archivo distinto al
        // que declara el servidor.
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Anti-clickjacking: nadie puede embeber el sitio en un <iframe>
        // salvo el propio sitio mismo.
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        return $response;
    }
}
