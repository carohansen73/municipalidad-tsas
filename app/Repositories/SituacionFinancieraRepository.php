<?php

namespace App\Repositories;

use App\Models\SituacionFinanciera;
use App\Repositories\BaseRepository;

/**
 * Class SituacionFinancieraRepository
 * @package App\Repositories
 * @version April 16, 2024, 3:53 pm UTC
*/

class SituacionFinancieraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'area',
        'anio',
        'periodo',
        'titulo'
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
        return SituacionFinanciera::class;
    }
}
