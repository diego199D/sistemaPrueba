<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Docente; 

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Docente::create([
            'nombre' => 'Juan Pérez',
            'fechaContrato' => '2023-02-15',
            'id_usuario' => 2,
        ]);
    }
}
