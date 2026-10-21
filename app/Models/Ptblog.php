<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptblog extends Model
{
    use HasFactory;

    protected $table = 'ptblogs';

    protected $perPage = 20;

    protected $fillable = [
        'nombre', 'descripcion', 'cuerpo', 'img', 'keywords', 'slug', 'blog_id', 'published_at',
    ];

    protected $casts = ['published_at' => 'datetime'];

    public function tags()
    {
        return $this->belongsToMany(Ptag::class, 'ptblog_categoria', 'blog_id', 'tag_id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
