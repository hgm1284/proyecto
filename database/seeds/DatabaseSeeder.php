<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(PeriodosTableSeeder::class);
       $this->call(PrivilegiosTableSeeder::class);
       $this->call(UsersTableSeeder::class);
    }
}
