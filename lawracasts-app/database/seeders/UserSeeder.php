<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            [
                'id' => Str::uuid(),
                'first_name' => 'Dummy',
                'last_name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('password'),
                'image_url' => 'assets/default-pp.png',
                'is_admin' => true,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'first_name' => 'Dummy',
                'last_name' => 'Member 1',
                'email' => 'member1@email.com',
                'password' => Hash::make('password'),
                'image_url' => 'assets/default-pp.png',
                'is_admin' => false,
                'created_at' => now()
            ],
            [
                'id' => Str::uuid(),
                'first_name' => 'Dummy',
                'last_name' => 'Member 2',
                'email' => 'member2@email.com',
                'password' => Hash::make('password'),
                'image_url' => 'assets/default-pp.png',
                'is_admin' => false,
                'created_at' => now()
            ]
        ]);
    }
}
