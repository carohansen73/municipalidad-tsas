<?php

namespace App\Repositories;

use App\Models\SeccionInformacion;
use App\Repositories\BaseRepository;

/**
 * Class SeccionInformacionRepository
 * @package App\Repositories
 * @version April 4, 2024, 2:23 pm UTC
*/

class SeccionInformacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'seccion_id',
        'titulo',
        'informacion',

        'img_portada',
        'img_2',
        'img_3',
        'img_4'
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
        return SeccionInformacion::class;
    }
}
