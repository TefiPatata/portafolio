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
        Schema::create('profileinfo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('profile_photo');
            $table->text('description');
            $table->string('phone');
            $table->string('location');
            $table->foreignId('aboutme_id')->constrained('aboutme'); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('work_id')->constrained('work'); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('services_id')->constrained('services'); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('portfolio_id')->constrained('portfolio'); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('socialnetworks_id')->constrained('socialnetworks'); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('skillssection_id')->constrained('skillssection'); // Agrega la llave foránea relacionada con la tabla clients
            $table->foreignId('messages_id')->constrained('messages'); // Agrega la llave foránea relacionada con la tabla clients
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfo');
    }
};
