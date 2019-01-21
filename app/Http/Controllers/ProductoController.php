<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function showAll(){
        
        $productos = DB::table('producto')
            ->join('categoria', 'producto.id_categoria', '=', 'categoria.id')
            ->select('producto.*', 'categoria.nombre as categoria')
            ->orderByRaw('producto.id ASC')
            ->get();

        return response($productos, 200)
                  ->header('Content-Type', 'application/json');
    }

    public function show($id){
        
        $producto = DB::table('producto')
            ->where('producto.id', '=', $id)
            ->join('categoria', 'producto.id_categoria', '=', 'categoria.id')
            ->select('producto.*', 'categoria.nombre as categoria')
            ->orderByRaw('producto.id ASC')
            ->get();

        return response($producto, 200)
                  ->header('Content-Type', 'application/json');
    }

    public function store(Request $request){
        $producto = new Producto;

        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->descuento = $request->descuento;
        $producto->fechainicio_descuento = $request->fechainicio_descuento;
        $producto->fechafin_descuento = $request->fechafin_descuento;
        $producto->imagen = $request->urlimagen;

        $producto->save();

        return response($producto, 200)
                  ->header('Content-Type', 'application/json');
    }
}
