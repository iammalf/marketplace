<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    //FUNCION PARA CAMBIAR ID POR SLUG EN LAS URLS
    public function getRouteKeyName()
    {
        return "slug";
    }

    //RELACION UNO A MUCHOS INVERSA
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorypost()
    {
        return $this->belongsTo(Categorypost::class);
    }

    //RELACION MUCHOS A MUCHOS
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //RELACION UNO A UNO POLIMORFICA
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
