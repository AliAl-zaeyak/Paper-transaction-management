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
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('born');
            $table->string('governorate');
            $table->string('nationality');
            $table->integer('universitynumber');
            $table->string('natunalnumber');
            $table->string('dateoficard');
            $table->string('phonenumber');
            $table->string('graduationdate')->default('-');
            $table->string('differenatiation');
            $table->string('specilization');
            $table->string('year');
            $table->string('status');
            $table->string('academicyear')->default('2022-2023');
            $table->timestamps();
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
