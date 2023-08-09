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

        /*
        'title',
        'director',
        'imageUrl',
        'duration',
        'releaseDate',
        'genre'
        */
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100)->nullable(false);
            $table->string('director', 100)->nullable(false);
            $table->string('imageUrl', 100)->nullable(false);
            $table->integer('duration')->nullable(false);
            $table->date('releaseDate')->nullable(false);
            $table->string('genre', 100)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};