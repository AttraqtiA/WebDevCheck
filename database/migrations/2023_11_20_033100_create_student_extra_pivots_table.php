<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Extracurricular;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_extra_pivots', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Kan udah nyambung di HasMany sama BelongsTo classnya
            // $table->foreignId('extracurricular_id');
            // $table->foreignId('student_id');

            $table->unsignedBigInteger('extracurricular_id');
            $table->foreign('extracurricular_id')
            ->references('id')
            ->on('extracurriculars')
            ->onDelete('cascade');

            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_extra_pivots');
    }
};
