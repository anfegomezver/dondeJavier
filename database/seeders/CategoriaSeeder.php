<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\User;

class CategoriaSeeder extends Seeder
{

    public function run(){
    
        $usuarios = User::pluck('id')->toArray();

        $categorias = [
            ['nombre' => 'Comidas Rápidas', 'descripcion' => 'Hamburguesas, perros calientes, sándwiches, etc.'],
            ['nombre' => 'Picadas', 'descripcion' => 'Platos grandes con varias carnes y acompañamientos.'],
            ['nombre' => 'Papas y Derivados', 'descripcion' => 'Salchipapas, choripapas y otros acompañamientos.'],
            ['nombre' => 'Bebidas', 'descripcion' => 'Gaseosas, jugos, agua, té y más.'],
            ['nombre' => 'Extras y Adiciones', 'descripcion' => 'Porciones adicionales de papas, carnes, salsas, etc.'],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create([
                'nombre' => $categoria['nombre'],
                'descripcion' => $categoria['descripcion'],
                'registrado_por' => $usuarios[array_rand($usuarios)], // Asignar un usuario aleatorio
            ]);
        }
}

}

//php artisan db:seed --class=CategoriaSeeder
