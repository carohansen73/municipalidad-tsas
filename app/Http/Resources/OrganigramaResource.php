<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganigramaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return[
            'area_id' => $this->area_id,
            'area' => $this->area->nombre,
            'responsable' => $this->responsable,
            'cargo' => $this->cargo,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'descripcion' => $this->descripcion,
            'depende_de' => $this->depende_de,

        ];
    }
}
