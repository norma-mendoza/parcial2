<?php

use App\Notas;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('notas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('notas')->insert([
            'nota1' => '8',
            'nota2' => '9',
            'nota3' => '9',
            'nota4' => '8',
            'promedio' => '8',
            'parcial' => '9',
            'idcurso' => '1',
            'idprofesor' => '1',
            'idalumno' => '1'
        ]);

        factory(Notas::class, 18)->create();
    }
}