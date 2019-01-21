<?php

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            'titulo' => 'Agua de Coco',
            'descripcion' => 'Bebida de 350ml',
            'precio' =>  4000,
            'descuento' => 10,
            'fechainicio_descuento' => '2019-01-15',
            'fechafin_descuento' => '2019-01-30',
            'id_categoria'=> 1,
            'imagen'=>'https://cdn.naturitas.es/media/catalog/product/cache/2/image/467x/9df78eab33525d08d6e5fb8d27136e95/a/c/act-0031689_image.png'
        ]);

        DB::table('producto')->insert([
            'titulo' => 'Agua de Coco',
            'descripcion' => 'Bebida de 350ml',
            'precio' =>  4000,
            'descuento' => 10,
            'fechainicio_descuento' => '2019-01-15',
            'fechafin_descuento' => '2019-01-30',
            'id_categoria'=> 1,
            'imagen'=>'https://cdn.naturitas.es/media/catalog/product/cache/2/image/467x/9df78eab33525d08d6e5fb8d27136e95/a/c/act-0031689_image.png'
        ]);

        DB::table('producto')->insert([
            'titulo' => 'Agua de Coco',
            'descripcion' => 'Bebida de 350ml',
            'precio' =>  4000,
            'descuento' => 10,
            'fechainicio_descuento' => '2019-01-15',
            'fechafin_descuento' => '2019-01-30',
            'id_categoria'=> 1,
            'imagen'=>'https://cdn.naturitas.es/media/catalog/product/cache/2/image/467x/9df78eab33525d08d6e5fb8d27136e95/a/c/act-0031689_image.png'
        ]);

    }
}
