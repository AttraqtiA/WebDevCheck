<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('extracurriculars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('requirements')->nullable();
            $table->string('price')->nullable();
            $table->string('tutor_name')->nullable();

            // $table->unsignedBigInteger('student_id');
            // $table->foreign('student_id')
            // ->references('id')
            // ->on('students')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extracurriculars');
    }
};
