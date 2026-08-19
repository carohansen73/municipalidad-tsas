<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publico extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'talleres_publicos';

    protected $fillable = [
        'nombre',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nombre',
            ],
        ];
    }

    public function talleres()
    {
        return $this->hasMany(Taller::class, 'publico_id');
    }
}
