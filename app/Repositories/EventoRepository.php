<?php

namespace App\Repositories;

use App\Models\Evento;
use App\Repositories\BaseRepository;

/**
 * Class EventoRepository
 * @package App\Repositories
 * @version April 18, 2024, 12:21 pm UTC
*/

class EventoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'seccion_id',
        'img',
        'vigente',
        'fecha_inicio',
        'fecha_fin'
    ];

    /**
     * Orderable columns.
     */
    protected array $orderable = [
        'fecha_inicio',
        'fecha_fin',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Evento::class;
    }
}
