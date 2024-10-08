<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toursen extends Model
{
    use HasFactory;
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_toursen');
    }
}
