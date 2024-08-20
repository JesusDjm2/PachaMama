<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entag extends Model
{
    static $rules = [
        'nombre' => 'required',
        'slug'=>'required',
      ];
    
      protected $perPage = 20;
    
      /**
       * Attributes that should be mass-assignable.
       *
       * @var array
       */
      protected $fillable = ['nombre', 'slug'];
    
    
      /**
       * @return \Illuminate\Database\Eloquent\Relations\HasMany
       */
      public function enblogs()
   {
       return $this->belongsToMany(Enblog::class, 'enblog_categoria', 'tag_id', 'blog_id');
   }
}
