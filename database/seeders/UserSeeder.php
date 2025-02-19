<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'user@gmail.com',
                'name' => 'User 1',
                'role' => 'user',
                'password' => bcrypt('foobarrr'),
            ],
            [
                'email' => 'user2@gmail.com',
                'name' => 'User 2',
                'role' => 'user',
                'password' => bcrypt('foobarrr'),

            ],
            [
                'email' => ' user3@gmail.com',
                'name' => 'User 3',
                'role' => 'user',
                'password' => bcrypt('foobarrr'),
            ],
        ];
        
        User::firstOrCreate([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'role' => 'admin',
            'password' => bcrypt('foobarrr'),
        ]);

        foreach ($users as $user) {
            User::firstOrCreate($user);
        }
    }
}
