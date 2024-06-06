<?php

namespace App\Repositories;

use App\Models\BoletinOficial;
use App\Repositories\BaseRepository;

/**
 * Class BoletinOficialRepository
 * @package App\Repositories
 * @version May 31, 2024, 12:16 pm UTC
*/

class BoletinOficialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'titulo',
        'tipo',
        'anio',
        'orden',
        'publica',
        'mes'
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
        return BoletinOficial::class;
    }
}
