<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CspReportController extends Controller
{
    /**
     * Recibe los reportes que manda el navegador cuando algo viola el CSP
     * (en modo Report-Only, esto pasa aunque nada se haya bloqueado).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reporte = json_decode($request->getContent(), true) ?? $request->getContent();

        Log::channel('csp')->info('CSP violation', [
            'reporte' => $reporte,
            'url' => $request->headers->get('referer'),
        ]);

        return response('', 204);
    }
}
