<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public $table = 'area';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
    ];

}
