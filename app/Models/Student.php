<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function extracurricular_belongsto(): BelongsTo {
    //     return $this->belongsTo(Extracurricular::class, 'extracurricular_id', 'id');
    // }

    public function pivot(): HasMany {
        return $this->HasMany(StudentExtraPivot::class, 'student_id', 'id');
    }
}
