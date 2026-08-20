<?php

namespace App\Http\Controllers;

use App\Models\InscripcionSorteo;
use Illuminate\Http\Request;

class SorteoController extends AppBaseController
{

    public function index(Request $request)
    {
        $this->authorize('viewAny', InscripcionSorteo::class);

        $inscriptos = InscripcionSorteo::with('empleado')->get();

        return view('cms.sorteo.index')
            ->with('inscriptos', $inscriptos);
    }
}
