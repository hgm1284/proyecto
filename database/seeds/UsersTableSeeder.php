<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Harvey Gómez',
          'email' => 'hgm1284@gmail.com',
          'id_rolusuario' => '1',
          'password' => bcrypt('12345678'),
      ]);
    }
}
