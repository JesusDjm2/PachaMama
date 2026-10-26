<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptcategory extends Model
{
    use HasFactory;

    protected $table = 'ptcategories';

    protected $fillable = ['nombre', 'link'];

    public function getRouteKeyName()
    {
        return 'link';
    }

    public function toursens() { return $this->tours(); }
    public function tours()
    {
        return $this->belongsToMany(Tourpt::class, 'ptcategory_tourspt', 'ptcategory_id', 'tourspt_id');
    }
}
