<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'jovan@email.com',
            'password' => Hash::make('jovanasd'),
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Daniel',
            'email' => 'daniel@email.com',
            'password' => Hash::make('danielasd'),
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Ryan',
            'email' => 'ryan@email.com',
            'password' => Hash::make('ryantoasd'),
            'user_role' => 'Admin'
        ]);
        User::insert([
            'user_name' => 'Rafi',
            'email' => 'rafi@email.com',
            'password' => Hash::make('rafiasdasd'),
            'user_role' => 'Member'
        ]);
        User::insert([
            'user_name' => 'Bintang',
            'email' => 'bintang@email.com',
            'password' => ('bintangasd'),
            'user_role' => 'Member'
        ]);
    }
}
