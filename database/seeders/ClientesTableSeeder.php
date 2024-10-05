<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        

DB::table('bp_clientes')->insert([
    [
        'codigo' => '001',
        'nombre' => 'Carlos Rodríguez',
        'password' => bcrypt('password1'),
    ],
    [
        'codigo' => '002',
        'nombre' => 'Ana García',
        'password' => bcrypt('password2'),
    ],
    [
        'codigo' => '003',
        'nombre' => 'Jorge Hernández',
        'password' => bcrypt('password3'),
    ],
    [
        'codigo' => '004',
        'nombre' => 'María Martínez',
        'password' => bcrypt('password4'),
    ],
    [
        'codigo' => '005',
        'nombre' => 'Luis Pérez',
        'password' => bcrypt('password5'),
    ],
    [
        'codigo' => '006',
        'nombre' => 'Sofía López',
        'password' => bcrypt('password6'),
    ],
    [
        'codigo' => '007',
        'nombre' => 'Pedro Jiménez',
        'password' => bcrypt('password7'),
    ],
    [
        'codigo' => '008',
        'nombre' => 'Laura Sánchez',
        'password' => bcrypt('password8'),
    ],
    [
        'codigo' => '009',
        'nombre' => 'Diego Torres',
        'password' => bcrypt('password9'),
    ],
    [
        'codigo' => '010',
        'nombre' => 'Patricia Flores',
        'password' => bcrypt('password10'),
    ],
    [
        'codigo' => '011',
        'nombre' => 'Raúl Castillo',
        'password' => bcrypt('password11'),
    ],
    [
        'codigo' => '012',
        'nombre' => 'Mónica Ortega',
        'password' => bcrypt('password12'),
    ],
    [
        'codigo' => '013',
        'nombre' => 'Andrés Ramírez',
        'password' => bcrypt('password13'),
    ],
    [
        'codigo' => '014',
        'nombre' => 'Lucía Morales',
        'password' => bcrypt('password14'),
    ],
    [
        'codigo' => '015',
        'nombre' => 'Felipe Guerrero',
        'password' => bcrypt('password15'),
    ],
    [
        'codigo' => '016',
        'nombre' => 'Gloria Cruz',
        'password' => bcrypt('password16'),
    ],
    [
        'codigo' => '017',
        'nombre' => 'Daniel Silva',
        'password' => bcrypt('password17'),
    ],
    [
        'codigo' => '018',
        'nombre' => 'Paola Romero',
        'password' => bcrypt('password18'),
    ],
    [
        'codigo' => '019',
        'nombre' => 'Eduardo Vargas',
        'password' => bcrypt('password19'),
    ],
    [
        'codigo' => '020',
        'nombre' => 'Isabel Soto',
        'password' => bcrypt('password20'),
    ],
    [
        'codigo' => '021',
        'nombre' => 'Gonzalo León',
        'password' => bcrypt('password21'),
    ],
    [
        'codigo' => '022',
        'nombre' => 'Camila Reyes',
        'password' => bcrypt('password22'),
    ],
    [
        'codigo' => '023',
        'nombre' => 'Ricardo Castro',
        'password' => bcrypt('password23'),
    ],
    [
        'codigo' => '024',
        'nombre' => 'Victoria Fernández',
        'password' => bcrypt('password24'),
    ],
    [
        'codigo' => '025',
        'nombre' => 'Esteban Mendoza',
        'password' => bcrypt('password25'),
    ],
]);

    }
}
