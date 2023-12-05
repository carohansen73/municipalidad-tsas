<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReclamoTema extends Model
{
    use HasFactory;
    public $table = 'reclamo_tema';

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

}
