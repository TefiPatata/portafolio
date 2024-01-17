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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('name_project');
            $table->string('type_project');
            $table->string('participation');
            $table->string('photo1');
            $table->string('photo2');
            $table->text('description');
            $table->foreignId('client_id')->constrained(); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('skills_id')->constrained(); // Agrega la llave foránea relacionada con la tabla skills
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio');
    }
};
