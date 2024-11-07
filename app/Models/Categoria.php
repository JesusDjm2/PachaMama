<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'link'];

    public function getRouteKeyName()
    {
        return 'link';
    }
    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'categoria_tour');
    }
}
