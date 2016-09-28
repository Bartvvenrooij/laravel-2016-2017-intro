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
            'name' => 'Admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('password'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@user.nl',
            'password' => bcrypt('password'),
            'role_id' => 2
        ]);
    }
}
