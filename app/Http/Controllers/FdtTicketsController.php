<?php

namespace App\Http\Controllers;

use App\Models\FdtTickets;
use App\Http\Requests\StoreFdtTicketsRequest;
use App\Http\Requests\UpdateFdtTicketsRequest;
use Illuminate\Support\Facades\DB;

class FdtTicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = FdtTickets::orderByDesc('edicion_anio')->get();

        return view('cms.fdt.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.fdt.tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFdtTicketsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFdtTicketsRequest $request)
    {
        $data = $request->validate([
            'edicion_anio' => 'required|digits:4|unique:fdt_tickets,edicion_anio',
            'descripcion' => 'nullable|string|max:5000',

            'estado_venta_presencial' => 'required|in:proximamente,activa,finalizada',
            'estado_venta_online' => 'required|in:proximamente,activa,finalizada',

            'fecha_inicio_presencial' => 'nullable|date',
            'lugar_presencial' => 'nullable|string|max:255',
            'horarios_presencial' => 'nullable|string',

            'fecha_inicio_online' => 'nullable|date',
            'url_venta_online' => 'nullable|url',

            'whatsapp' => 'nullable|string|max:50',
            'email' => 'nullable|email',
        ]);

        $data['activa'] = false;

        FdtTickets::create($data);

        flash('Edición actualizada correctamente')->success();
        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FdtTickets  $fdtTickets
     * @return \Illuminate\Http\Response
     */
    public function show(FdtTickets $ticket)
    {
        // return view('admin.fdt_tickets.edit', compact('fdtTicket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FdtTickets  $fdtTickets
     * @return \Illuminate\Http\Response
     */
    public function edit(FdtTickets $ticket)
    {
        return view('cms.fdt.tickets.edit')
            ->with('tickets', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFdtTicketsRequest  $request
     * @param  \App\Models\FdtTickets  $fdtTickets
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFdtTicketsRequest $request, FdtTickets $ticket)
    {

        $ticket->update($request->validated());

        flash('Edición actualizada correctamente')->success();
        return redirect()->route('tickets.index');
    }


    /**
     * Activar una edición (y desactivar las demás)
     */
    public function activar(FdtTickets $ticket)
    {
        DB::transaction(function () use ($ticket) {
            FdtTickets::where('activa', true)->update(['activa' => false]);
            $ticket->update(['activa' => true]);
        });
        flash('Edición activada correctamente')->success();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FdtTickets  $fdtTickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(FdtTickets $fdtTickets)
    {
        //
    }
}
