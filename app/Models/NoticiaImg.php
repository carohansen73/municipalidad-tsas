<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiaImg extends Model
{
    use HasFactory;
    public $table = 'noticia_img';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'img',
        'noticia_id',
        'leyenda'
    ];

    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'noticia_id');
    }
}
