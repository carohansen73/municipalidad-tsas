<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganigramaArea extends Model
{
    use HasFactory;
    public $table = 'organigrama_area';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'area_id',
        'organigrama_id'
    ];

}
