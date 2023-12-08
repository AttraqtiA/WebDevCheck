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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 50)->unique();
            $table->string('nickname', 50);
            $table->integer('grade_number');
            $table->string('phone', 50);
            $table->string('sosmed', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->string('gender');
            $table->string('birthdate');
            $table->string('nationality');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('postcode');
            $table->string('photo');
            $table->string('notes');

            // $table->foreignIdFor(\App\Models\Extracurricular::class, 'extracurricular_id')->nullable();

            // $table->unsignedBigInteger('extracurricular_id');
            // $table->foreign('extracurricular_id')
            // ->references('id')
            // ->on('extracurriculars')
            // ->onDelete('cascade');

            // Pak Evan
            // $table->foreignId('extracurricular_id')
            // ->constrained(table: 'extracurriculars', indexName: 'id')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
