<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Student 1',
                'nim' => '202300023',
                'phone' => '085123456781',
                'email' => 'student@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 'student'
            ],
            [
                'name' => 'Admin',
                'nim' => '0',
                'phone' => '085123456782',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111111'),
                'role' => 'admin'
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
