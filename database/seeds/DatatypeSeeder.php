<?php

use Illuminate\Database\Seeder;
use App\Datatype;
class DatatypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datatype::create([
            'name'=>'varchar',
            'weight'=>14,
            'example'=>'Cadena ejemplo'
        ]);
        Datatype::create([
            'name'=>'integer',
            'weight'=>14,
            'example'=>'15987987'
        ]);
        Datatype::create([
            'name'=>'date',
            'weight'=>14,
            'example'=>'07/05/1994'
        ]);
        Datatype::create([
            'name'=>'',
            'weight'=>14,
            'example'=>'Cadena ejemplo'
        ]);
        Datatype::create([
            'name'=>'char',
            'weight'=>14,
            'example'=>'Cadena'
        ]);
        Datatype::create([
            'name'=>'binary',
            'weight'=>14,
            'example'=>'true'
        ]);
    }
}
