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
        Schema::create('work', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('modality');
            $table->string('time-contract');
            $table->string('workplace');
            $table->text('description');
            $table->foreignId('skills_id')->constrained(); // Agrega la llave foránea relacionada con la tabla clients        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work');
    }
};
