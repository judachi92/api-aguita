<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function showAll(){
        $categorias = Categoria::all();
        return response($categorias, 200)
                  ->header('Content-Type', 'application/json');
    }
}
