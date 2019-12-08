<?php

use Illuminate\Database\Seeder;

class PrivilegiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('privilegios')->insert([
          'tipo_privilegio' => 'Administrador',
          'detalle' => 'Full permisos'
      ]);
      DB::table('privilegios')->insert([
          'tipo_privilegio' => 'Supervisor',
          'detalle' => 'Supervisor'
      ]);

    }
}
