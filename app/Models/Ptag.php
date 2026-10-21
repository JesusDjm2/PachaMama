<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptag extends Model
{
    use HasFactory;

    protected $table = 'pttags';

    protected $perPage = 20;

    protected $fillable = ['nombre', 'slug'];

    public function blogs()
    {
        return $this->belongsToMany(Ptblog::class, 'ptblog_categoria', 'tag_id', 'blog_id');
    }
}
