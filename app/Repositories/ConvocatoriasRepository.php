<?php

namespace App\Repositories;

use App\Models\Convocatorias;
use App\Repositories\BaseRepository;

/**
 * Class ConvocatoriasRepository
 * @package App\Repositories
 * @version February 7, 2025, 11:37 am UTC
*/

class ConvocatoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'telefono',
        'email',
        'archivo',
        'link',
        'img'
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
        return Convocatorias::class;
    }
}
