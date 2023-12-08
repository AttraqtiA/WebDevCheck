<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extracurriculars')->insert([
            'name' => 'Maximum Tune',
            'requirements'=> 'NONE',
            'price' => "100",
            'tutor_name' => "Louis Fernando",
        ]);
        DB::table('extracurriculars')->insert([
            'name' => 'Mario Kart',
            'requirements'=> 'Jiwa Raga',
            'price' => "200",
            'tutor_name' => "Jason Bocil",
        ]);
        DB::table('extracurriculars')->insert([
            'name' => 'maimai',
            'requirements'=> 'Jiwa Raga Nasionalis',
            'price' => "1000",
            'tutor_name' => "attraqtia",
        ]);
        DB::table('extracurriculars')->insert([
            'name' => 'Spongebob Koin',
            'requirements'=> 'Mental yang kuat',
            'price' => "9999",
            'tutor_name' => "Andi",
        ]);
        DB::table('extracurriculars')->insert([
            'name' => 'Mancing',
            'requirements'=> 'Mahasiswa',
            'price' => "100",
            'tutor_name' => "Gavin",
        ]);
    }
}
