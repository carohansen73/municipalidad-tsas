<?php

namespace App\Repositories;

use App\Models\LineUp;
use App\Repositories\BaseRepository;

/**
 * Class LineUpRepository
 * @package App\Repositories
 * @version February 5, 2025, 12:43 pm UTC
*/

class LineUpRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'artista',
        'fecha',
        'img'
    ];

        /**
     * Orderable columns.
     */
    protected array $orderable = [
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
        return LineUp::class;
    }
}
