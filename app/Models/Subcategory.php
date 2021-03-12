<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //RELACION UNO A MUCHOS INVERSA
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
