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
        Schema::create('action_recherches', function (Blueprint $table) {
            $table->id();
            $table->string('action')->nullable();
            $table->string('mot_cle')->nullable();
            $table->string('organisme')->nullable();
            $table->string('duree')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('action_recherches');
    }
};
