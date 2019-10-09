<?php

use Illuminate\Database\Seeder;
use App\Collation;

class CollationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collation::create([
            'description' => 'UTF8'
        ]);
        Collation::create([
            'description' => 'UTF8-MB4'
        ]);
        Collation::create([
            'description' => 'UTF8-UNICODE-CI'
        ]);
        Collation::create([
            'description' => 'UTF8-SPANISH-CI'
        ]);
        Collation::create([
            'description' => 'UTF16'
        ]);
        Collation::create([
            'description' => 'UTF16-MB4'
        ]);
        Collation::create([
            'description' => 'UTF16-UNICODE-CI'
        ]);
        Collation::create([
            'description' => 'UTF16-SPANISH-CI'
        ]);

    }
}
