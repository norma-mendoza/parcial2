<?php
use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('alumnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('alumnos')->insert([
            'nombre' => 'yureily',
            'apellido' => 'Hernandez',
            'fech_nac' => '15/07/2008',
            'direccion' => 'sonsonate',
            'genero' => 'F',
            'telefono' => '70345682',
            'email' => 'yureily@gmail.com',
            'password' => bcrypt('yure1568')
        ]);


        factory(Alumnos::class, 18)->create();
        
        //seleccion de los datos de la tabla alumnos
        $seleccion = DB::select('select * from alumnos');
    }
}