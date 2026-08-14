<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index() {
        $urls = [];

        $routes = Route::getRoutes();

        foreach ($routes as $route) {

            // Solo métodos GET
            if (!in_array('GET', $route->methods())) {
                continue;
            }

            $uri = $route->uri();

            // Ignorar rutas con parámetros
            if (str_contains($uri, '{')) {
                continue;
            }

            // Ignorar rutas internas / auth / api / admin
            if (
                str_starts_with($uri, 'login') ||
                str_starts_with($uri, 'register') ||
                str_starts_with($uri, 'password') ||
                str_starts_with($uri, 'api') ||
                str_starts_with($uri, 'user') ||
                str_starts_with($uri, 'home')
            ) {
                continue;
            }

            // Ignorar rutas internas de Laravel
            if (
                str_starts_with($uri, '_ignition') ||
                str_starts_with($uri, 'sanctum') ||
                str_starts_with($uri, 'route-clear') ||
                str_starts_with($uri, 'clear-cache') ||
                $uri === 'sitemap.xml'
            ) {
                continue;
            }

            // Ignorar rutas con middleware auth (panel admin)
            $middleware = $route->middleware();

            if (in_array('auth', $middleware)) {
                continue;
            }

            $urls[] = [
                'loc' => url($uri === '/' ? '' : $uri),
                'lastmod' => now()->toDateString(),
            ];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= '<url>' . "\n";
            $xml .= '<loc>' . htmlspecialchars($url['loc'], ENT_XML1 | ENT_QUOTES, 'UTF-8') . '</loc>' . "\n";
            $xml .= '<lastmod>' . $url['lastmod'] . '</lastmod>' . "\n";
            $xml .= '<priority>0.8</priority>' . "\n";
            $xml .= '</url>' . "\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
