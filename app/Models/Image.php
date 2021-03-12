<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Image extends Model
{
    use HasFactory;

    //RELACION POLIMORFICA
    public function imageable()
    {
        return $this->morphTo();
    }
}
