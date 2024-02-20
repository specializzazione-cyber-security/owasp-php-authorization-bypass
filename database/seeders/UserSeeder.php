<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@blog.com',
                'password' => 'password',
            ],
            [
                'name' => 'User',
                'email' => 'user@blog.com',
                'password' => 'password',
            ]
        ];

        foreach($users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }

        $admin = User::find(1);
        $admin->update([
            'is_admin' => true,
        ]);


    }
}
