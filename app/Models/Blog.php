<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];

            public function komentar()
    {
        return $this->hasMany(Komen::class);
    }

       public function getSlugAttribute()
    {
        return Str::slug($this->judul); // Pastikan atribut judul tersedia di model Blog
    }


}
