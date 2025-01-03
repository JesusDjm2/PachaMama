<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'contenido',
        'ubicacion',
        'precio',
        'dias',
        'img',
        'mapa',
        'categoria',
        'slug'
    ];
    public function toursens()
    {
        return $this->hasOne(Toursen::class);
    }
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_tour');
    }
    
}
