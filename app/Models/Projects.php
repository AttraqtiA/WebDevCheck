<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    private static $projects = [
        [
            'title' => 'Calculator',
            'code' => 'cal',
            'course' => 'Algorithm Programming',
        ],
        [
            'title' => 'Accounting',
            'code' => 'acc',
            'course' => 'Web Programming',
        ],
        [
            'title' => 'Student Report',
            'code' => 'stu',
            'course' => 'Web Programming',
        ],
    ];

    public static function allData() {
        // return self::$projects;
        return collect(self::$projects);
    }

    public static function dataWithCode($code) {
        // $allProjects = self::$projects;
        // foreach ($allProjects as $pro) {
        //     if ($pro['code'] === $code) {
        //         return $pro;
        //     }
        // }
        $allProjects = static::allData();
        return $allProjects->firstWhere('code', $code);
    }
}
