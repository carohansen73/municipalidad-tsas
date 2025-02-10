<?php

namespace App\Repositories;

use App\Models\Grilla;
use App\Repositories\BaseRepository;

/**
 * Class GrillaRepository
 * @package App\Repositories
 * @version February 5, 2025, 12:50 pm UTC
*/

class GrillaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
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
        return Grilla::class;
    }
}
