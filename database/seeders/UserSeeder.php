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
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Daniel',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Ryan',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Rafi',
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Bintang',
            'user_role' => 'Member'
        ]);
    }
}
