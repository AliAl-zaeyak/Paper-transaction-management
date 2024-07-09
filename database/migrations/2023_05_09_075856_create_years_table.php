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
        Schema::create('years', function (Blueprint $table) {
            $table->integer('universitynumber')->references('universitynumber')->on('student');
            $table->foreignId('student_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('year');
            $table->string('academicyear');
            $table->string('notification')->default('null');
            $table->string('firstexamsession')->default('مشترك');
            $table->string('secondexamsession')->default('مشترك');
            $table->string('thirdexamsession')->default('/');
            $table->string('note');
            $table->string('status');
            $table->date('registerdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('years');
    }
};
