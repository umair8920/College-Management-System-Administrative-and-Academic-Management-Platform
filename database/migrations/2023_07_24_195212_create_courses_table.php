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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->binary('image')->nullable();
            $table->string('Name', 200);
            $table->text('Description');
            $table->string('C1', 50);
            $table->string('C2', 50);
            $table->string('C3', 50);
            $table->string('C4', 50);
            $table->string('C5', 50);
            $table->string('C6', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
