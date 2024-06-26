<?php

namespace App\Repositories;

use App\Models\AvisoOficial;
use App\Repositories\BaseRepository;

/**
 * Class AvisoOficialRepository
 * @package App\Repositories
 * @version June 19, 2024, 1:12 pm UTC
*/

class AvisoOficialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'nombre',
        'descripcion',
        'area',
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
        return AvisoOficial::class;
    }


    /**
     * Configure the Model
     **/
    // public function getOrdered()
    // {
    //     return AvisoOficial::orderBy('fecha', 'desc')->get();
    // }
}
