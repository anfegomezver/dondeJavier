<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;

class ProductoSeeder extends Seeder
{
    public function run()
    {
        // Obtener todas las categorías
        $categorias = Categoria::pluck('id', 'nombre')->toArray();

        // Obtener usuarios existentes o crear uno si no hay
        $usuarios = User::pluck('id')->toArray();
        if (empty($usuarios)) {
            $usuario = User::factory()->create();
            $usuarios = [$usuario->id];
        }

        // Lista de productos con su categoría y precios
        $productos = [

            // Salchipapas
            ['nombre' => 'Salchipapas', 'categoria' => 'Salchipapas', 'precio_venta' => 12000],
            ['nombre' => 'Salchipapas Mixta', 'categoria' => 'Salchipapas', 'precio_venta' => 14000],
            
            // Choripapas
            ['nombre' => 'Choripapas', 'categoria' => 'Choripapas', 'precio_venta' => 13000],
            ['nombre' => 'Choripapas Mixta', 'categoria' => 'Choripapas', 'precio_venta' => 15000],

            // Picadas
            ['nombre' => 'Picada Individual', 'categoria' => 'Picadas', 'precio_venta' => 20000],
            ['nombre' => 'Picada para 3 personas', 'categoria' => 'Picadas', 'precio_venta' => 38000],

            // Hamburguesas
            ['nombre' => 'Hamburguesa Sencilla', 'categoria' => 'Hamburguesas', 'precio_venta' => 12000],
            ['nombre' => 'Hamburguesa Pollo', 'categoria' => 'Hamburguesas', 'precio_venta' => 13000],
            ['nombre' => 'Hamburguesa Pollo + Papa', 'categoria' => 'Hamburguesas', 'precio_venta' => 15000],
            ['nombre' => 'Hamburguesa Mixta', 'categoria' => 'Hamburguesas', 'precio_venta' => 16000],
            ['nombre' => 'Hamburguesa Combo', 'categoria' => 'Hamburguesas', 'precio_venta' => 18000],
            ['nombre' => 'Hamburguesa Sencilla + Papa', 'categoria' => 'Hamburguesas', 'precio_venta' => 15000],
            ['nombre' => 'Hamburguesa Doble', 'categoria' => 'Hamburguesas', 'precio_venta' => 20000],
            ['nombre' => 'Hamburguesa Doble + Pollo', 'categoria' => 'Hamburguesas', 'precio_venta' => 22000],
            ['nombre' => 'Hamburguesa Doble + Papa', 'categoria' => 'Hamburguesas', 'precio_venta' => 22000],
            ['nombre' => 'Hamburguesa La Super', 'categoria' => 'Hamburguesas', 'precio_venta' => 26000],
            
            // Adicional Hamburguesas
            ['nombre' => 'Adicional Papa', 'categoria' => 'Adicional Hamburguesas', 'precio_venta' => 5000],
            ['nombre' => 'Adicional Salchicha', 'categoria' => 'Adicional Hamburguesas', 'precio_venta' => 5000],
            ['nombre' => 'Adicional Pollo', 'categoria' => 'Adicional Hamburguesas', 'precio_venta' => 5000],
            ['nombre' => 'Adicional Chorizo', 'categoria' => 'Adicional Hamburguesas', 'precio_venta' => 5000],
            ['nombre' => 'Adicional Carne', 'categoria' => 'Adicional Hamburguesas', 'precio_venta' => 5000],
            
            // Mini hamburguesas
            ['nombre' => 'Mini Hamburguesa Sencilla', 'categoria' => 'Mini Hamburguesas', 'precio_venta' => 10000],
            ['nombre' => 'Mini Hamburguesa Sencilla + Papa', 'categoria' => 'Mini Hamburguesas', 'precio_venta' => 12000],
            ['nombre' => 'Mini Hamburguesa Mixta', 'categoria' => 'Mini Hamburguesas', 'precio_venta' => 12000],
            ['nombre' => 'Mini Hamburguesa Combo', 'categoria' => 'Mini Hamburguesas', 'precio_venta' => 14000],

            //----------------------Falta agregar más productos----------------------
        ];

        foreach ($productos as $producto) {
            // Buscar la categoría correspondiente
            if (!isset($categorias[$producto['categoria']])) {
                continue; // Si la categoría no existe, saltar este producto
            }

            Producto::create([
                'id_categoria' => $categorias[$producto['categoria']],
                'nombre' => $producto['nombre'],
                'descripcion' => $producto['nombre'],
                'imagen' => null,
                'precio_compra' => $producto['precio_venta'] * 0.6, // Suponiendo un 60% del precio de venta
                'stock' => 50, // Valor arbitrario
                'precio_venta' => $producto['precio_venta'],
                'stock_minimo' => 10, // Valor arbitrario
                'registrado_por' => $usuarios[array_rand($usuarios)], // Usuario aleatorio
                'fecha_vencimiento' => null, // No aplica en muchos casos
            ]);
        }
    }
}

//php artisan db:seed --class=ProductoSeeder