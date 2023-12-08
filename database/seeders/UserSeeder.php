<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1, // DI USER FACTORY ROLENYA 3, member
            'is_login' => '0',
            'is_active' => '1',
            'name' => 'Lie, Samuel M K',
            'email' => 'apahayo@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'role_id' => 2,
            'is_login' => '0',
            'is_active' => '1',
            'name' => 'Aku Editor',
            'email' => 'editor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(10)->create();
    }
}
