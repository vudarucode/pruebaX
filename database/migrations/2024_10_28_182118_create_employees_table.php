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
        Schema::create('ds_employees', function (Blueprint $table) {
            $table->id();
            //Foreign Key
            $table->foreignId('department_id')->constrained('ds_departments');
            $table->foreignId('education_level_id')->constrained('ds_education_levels');
            //
            $table->string('name');
            $table->string('last_name');
            $table->integer('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ds_employees');
    }
};
