<?php

namespace App\Http\Controllers;

use App\Models\EmpleadoMunicipal;
use App\Models\InscripcionSorteo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

/*Este controller se utiliza para actividades/eventos especiales*/
class EspecialesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showInscription()
    {
        return view('especiales.sorteos-empleados');
    }


    public function register(Request $request){

        // 1. Validación
        $request->validate([
            'dni' => 'required|numeric|digits_between:7,8',
            'legajo' => 'nullable|numeric|digits_between:1,4',
        ]);

        $empleado = EmpleadoMunicipal::where('dni', $request->dni)
            // ->where('legajo', $request->legajo)
            ->first();

        if (!$empleado) {
            return back()->with([
                'alert_type' => 'error',
                'alert_title' => 'Atención',
                'alert_message' => 'No pudimos encontrar tus datos en el padrón de empleados municipales.',
            ]);
        }


        // 3. Controlo legajo para empleados NO COMUNITARIOS
        if ($empleado->area !== 'comunitario') {

            if (!$request->legajo) {
                return back()->with([
                    'alert_type' => 'error',
                    'alert_title' => 'Atención',
                    'alert_message' => 'Para los empleados municipales es obligatorio ingresar el número de legajo.',
                ]);
            }

            if ($empleado->legajo != $request->legajo) {
                return back()->with([
                    'alert_type' => 'error',
                    'alert_title' => 'Atención',
                    'alert_message' => 'El número de legajo ingresado no coincide con nuestros registros.',
                ]);
            }
        }

        //Verifico si ya está inscripto
        if ($empleado->inscripcionSorteo) {
            return back()->with([
                'alert_type' => 'error',
                'alert_title' => 'Atención',
                'alert_message' => 'Ya te encontrás inscripto en el sorteo. Tu numero de inscripción es: <strong>'. $empleado->inscripcionSorteo->numero_inscripcion
                .'</strong><br> Cada empleado puede participar una sola vez.',
            ]);
        }


        $inscripcion = DB::transaction(function () use ($empleado) {
            $numero = (InscripcionSorteo::max('numero_inscripcion') ?? 0) + 1;

            return InscripcionSorteo::create([
                'empleado_municipal_id' => $empleado->id,
                'numero_inscripcion' => $numero,
                'valida' => true,
            ]);
        });

        //Respuesta OK
        return back()->with([
            'alert_type' => 'success',
            'alert_title' => '¡Inscripción realizada!',
            'alert_message' => 'Tu número de inscripción es <strong>' . $inscripcion->numero_inscripcion .'<strong>',
        ]);
    }



    public function getRegistered(){
        $inscriptos = InscripcionSorteo::with('empleado')
        ->orderBy('numero_inscripcion')
        ->get();

        /* solo nombre y apellido
        $inscriptos->map(function ($i) {
            return $i->empleado->apellido . ' ' . $i->empleado->nombre;
        });
        */
    }

}


/*
VISTA:
@if(session('numero_inscripcion'))
    <div class="alert alert-success text-center">
        <h4>¡Inscripción exitosa!</h4>
        <p>Tu número de inscripción es:</p>
        <strong class="fs-2">
            Nº {{ session('numero_inscripcion') }}
        </strong>
    </div>
@endif
*/
