<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'user_name' => 'Jovan',
            'user_email' => 'jovan@email.com',
            'user_password' => 'jovan1',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Daniel',
            'user_email' => 'daniel@email.com',
            'user_password' => 'daniel1',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Ryan',
            'user_email' => 'ryan@email.com',
            'user_password' => 'ryan1',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Rafi',
            'user_email' => 'bintang@email.com',
            'user_password' => 'rafi1',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Bintang',
            'user_email' => 'bintang@email.com',
            'user_password' => 'bintang1',
            'user_role' => 'Member'
        ]);
    }
}
