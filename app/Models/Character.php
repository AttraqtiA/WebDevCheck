<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // buat migration

    // private static $characters = [
    //     [
    //         'name' => 'Topaz and Numby', 
    //         'path'=> 'Hunt',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Jingliu', 
    //         'path'=> 'Destruction',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Fu Xuan', 
    //         'path'=> 'Preservation',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Dan Heng Imbibitor Lunae', 
    //         'path'=> 'Destruction',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Lynx', 
    //         'path'=> 'Abundance',
    //         'rarity' => "4*"
    //     ],
    //     [
    //         'name' => 'Kafka', 
    //         'path'=> 'Nihility',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Blade', 
    //         'path'=> 'Destruction',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Luka', 
    //         'path'=> 'Nihility',
    //         'rarity' => "4*"
    //     ],
    //     [
    //         'name' => 'Luocha', 
    //         'path'=> 'Abundance',
    //         'rarity' => "5*"
    //     ],
    //     [
    //         'name' => 'Silver Wolf', 
    //         'path'=> 'Nihility',
    //         'rarity' => "5*"
    //     ],
    // ];

    // public static function allData() {
    //     // return self::$projects;
    //     return collect(self::$characters);
    // }

    // public static function dataWithCode($name) {
    //     // $allProjects = self::$projects;
    //     // foreach ($allProjects as $pro) {
    //     //     if ($pro['code'] === $code) {
    //     //         return $pro;
    //     //     }
    //     // }
    //     $allCharacters = static::allData();
    //     return $allCharacters->firstWhere('name', $name);
    // }
    
}

