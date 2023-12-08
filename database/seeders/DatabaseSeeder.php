<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Seeder;
use App\Models\Character;
use App\Models\Extracurricular;
use App\Models\StudentExtraPivot;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Model::unguard();

        Character::factory(5)->create();


        $this->call([
            ExtracurricularSeeder::class,
            StudentSeeder::class,

            RoleSeeder::class, // error SQLSTATE[HY000]: General error: 1364 karena RoleSeeder setelah UserSeeder
            UserSeeder::class,

        ]);

        StudentExtraPivot::factory(100)->create(); // ya kayaknya ini seharusnya setelah ExtracurricularSeeder dan StudentSeeder


        // php artisan db:seed

        Model::reguard();
    }
}
