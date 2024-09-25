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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 100);
            $table->string('Role');
            $table->text('Description');
            $table->text('Education');
            $table->text('Experiences');
            $table->text('Expertise');
            $table->text('language');
            $table->text('position');
            $table->string('phone', 20);
            $table->string('mail', 255);
            $table->text('exp_years');
            $table->binary('image')->nullable();
            $table->boolean('marital_status')->default(false);
            $table->timestamps();

            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
