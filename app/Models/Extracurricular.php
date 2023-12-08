<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Extracurricular extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $with = ['students_onetomany']; // Ini kalo manggil di model lanmgsung

    // public function students_onetomany(): HasMany { // buat return di extracurricular_details
    //     return $this->hasMany(Student::class, 'student_id', 'id');
    // }

    public function pivot(): HasMany {
        return $this->HasMany(StudentExtraPivot::class, 'extracurricular_id', 'id');
    }
}
