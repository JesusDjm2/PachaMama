<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'link'];

    public function getRouteKeyName()
    {
        return 'link';
    }
    public function toursens()
    {
        return $this->belongsToMany(Toursen::class, 'category_toursen');
    }
}
