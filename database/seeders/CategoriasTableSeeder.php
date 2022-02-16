<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'id' => 1,
                'nome' => 'Categoria Padrão',
            ],
            [
                'id' => 2,
                'nome' => 'Categoria Teste',
            ],
        ];

        Categoria::insert($categorias);
    }
}
