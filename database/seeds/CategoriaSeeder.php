<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nombre' => 'Bebidas'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Comidas'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Maquillaje'
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Ambiente'
        ]);
    }
}
