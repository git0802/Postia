<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make(1234),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make(1234),
            'remember_token' => Str::random(10),
        ]);

        User::factory(2)->create();
    }
}
