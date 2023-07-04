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
        Schema::create('post_docs', function (Blueprint $table) {
            $table->id();
            $table->string('specialite')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('annee')->nullable();
            $table->string('thematique')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_docs');
    }
};
