<?php

use Illuminate\Database\Seeder;
use App\DBEngine;

class DBEngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DBEngine::create([
            'name' => 'MongoDB'
        ]);
        DBEngine::create([
            'name' => 'Mysql'
        ]);
        DBEngine::create([
            'name' => 'MariaDB'
        ]);
        DBEngine::create([
            'name' => 'Oracle'
        ]);
        DBEngine::create([
            'name' => 'SqLite'
        ]);
        DBEngine::create([
            'name' => 'Redis'
        ]);
        DBEngine::create([
            'name' => 'Cassandra'
        ]);
        DBEngine::create([
            'name' => 'Postgre Sql'
        ]);
        DBEngine::create([
            'name' => 'Microsoft Sql Server'
        ]);
    }
}
