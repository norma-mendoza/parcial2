<?php
use App\Profesores;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0 ');
        DB::table('profesor')->truncate();
        db::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('profesor')->insert([
            'nombre' => 'Norma',
            'apellido' => 'Mendoza',
            'dui' => '65432904',
            'telefono' => '73457890',
            'email' => 'normitth@gmail.com',
            'password' => bcrypt('norma1547')
        ]);

        factory(Profesores::class, 18)->create();
    }
}
