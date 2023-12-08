<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    
    // php artisan db:seed --class=CharacterSeeder
    {
        DB::table('characters')->insert([
            'name' => 'Topaz and Numby', 
            'path'=> 'Hunt',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Jingliu', 
            'path'=> 'Destruction',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Fu Xuan', 
            'path'=> 'Preservation',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Dan Heng Imbibitor Lunae', 
            'path'=> 'Destruction',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Lynx', 
            'path'=> 'Abundance',
            'rarity' => "4*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Kafka', 
            'path'=> 'Nihility',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Blade', 
            'path'=> 'Destruction',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Luka', 
            'path'=> 'Nihility',
            'rarity' => "4*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Luocha', 
            'path'=> 'Abundance',
            'rarity' => "5*"
        ]);
        DB::table('characters')->insert([
            'name' => 'Silver Wolf', 
            'path'=> 'Nihility',
            'rarity' => "5*"
        ]);

    }
}
