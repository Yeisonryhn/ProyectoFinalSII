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
        $this->truncateTables([
            'd_b_engines',
            'roles',
            'collations',
            'clients',
            'datatypes',
            'projects',
            'users',
            'databases',
            'fields',
            'tables'

        ]);
        $this->call(DBEngineSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CollationSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(DatatypeSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DatabaseTableSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(FieldsTableSeeder::class);
    }

    protected function truncateTables(array $tables){

    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	foreach($tables as $table){
    		DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
