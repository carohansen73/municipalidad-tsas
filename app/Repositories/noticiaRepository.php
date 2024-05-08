<?php

namespace App\Repositories;

use App\Models\Noticia;
use App\Repositories\BaseRepository;

/**
 * Class noticiaRepository
 * @package App\Repositories
 * @version February 29, 2024, 5:40 pm UTC
*/

class noticiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'descripcion',
        'fecha',
        'categoria',
        'publicada',
        'destacada',
        'pathname',
        'usuario_id'
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
        return Noticia::class;
    }
}
