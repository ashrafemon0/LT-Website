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
        Schema::create('our_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_des');
            $table->integer('course_enroll');
            $table->string('course_review');
            $table->integer('course_price');
            $table->string('teacher_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_courses');
    }
};
