<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    public $timestamps = true;
    

    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id', 'id_categoria');
    }
}
