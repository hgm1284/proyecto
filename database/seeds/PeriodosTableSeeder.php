<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('periodos')->insert([
          'periodo' => '2018-2019'
      ]);
      DB::table('periodos')->insert([
          'periodo' => '2019-2020'
      ]);
      DB::table('periodos')->insert([
          'periodo' => '2020-2021'
      ]);

    }
}
