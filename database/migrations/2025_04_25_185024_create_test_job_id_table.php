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
        Schema::create('test_job_id', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('location');
            $table->String('job_name');
            $table->String('job_company');
            $table->String('job_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_job_id');
    }
};
