<?php

namespace App\Repositories;

use App\Models\Archivos;
use App\Repositories\BaseRepository;

/**
 * Class ArchivosRepository
 * @package App\Repositories
 * @version April 8, 2024, 1:14 pm UTC
*/

class ArchivosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nombre_agradable',
        'seccion_id',
        'sub_seccion'
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
        return Archivos::class;
    }
}
