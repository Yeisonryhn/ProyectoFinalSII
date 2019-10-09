<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'David Leonardo',
            'last_name' => 'Chacon García',
            'username' => 'adminis',
            'email' => 'admin@correo.com',
            'password' => bcrypt('admin'),
            'role_id' => '1',
        ]);
        factory(User::class,10)->create();
    }
}
