<?php

use Illuminate\Database\Seeder;
use App\Database;

class DatabaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Database::class,7)->create();
    }
}
