<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourpt extends Model
{
    use HasFactory;

    protected $table = 'tourspt';

    protected $fillable = [
        'tour_id', 'nombre', 'descripcion', 'contenido', 'resumen', 'detallado', 'incluidos',
        'importante', 'ubicacion', 'precio', 'dias', 'img', 'mapa', 'categoria', 'keywords',
        'slug', 'clase',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Ptcategory::class, 'ptcategory_tourspt', 'tourspt_id', 'ptcategory_id');
    }
}
