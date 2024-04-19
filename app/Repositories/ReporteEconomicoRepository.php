<?php

namespace App\Repositories;

use App\Models\ReporteEconomico;
use App\Repositories\BaseRepository;

/**
 * Class ReporteEconomicoRepository
 * @package App\Repositories
 * @version April 16, 2024, 3:51 pm UTC
*/

class ReporteEconomicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'periodo',
        'anio',
        'sector',
        'nombre_arch',
        'descripcion',
        'fecha'
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
        return ReporteEconomico::class;
    }
}
