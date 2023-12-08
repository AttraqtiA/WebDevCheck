<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentExtraPivot extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function extracurricular(): BelongsTo {
        return $this->belongsTo(Extracurricular::class, 'extracurricular_id', 'id');
    }

    public function student(): BelongsTo {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
