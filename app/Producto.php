<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table="productos";
    protected $fillable = [
        'name', 'price', 'image',
    ];
    public $timestamps = false;
}
