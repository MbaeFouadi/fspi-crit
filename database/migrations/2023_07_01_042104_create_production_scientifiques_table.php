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
        Schema::create('production_scientifiques', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->nullable();
            $table->integer('type_production_scientifique_id')->nullable();
            $table->integer('identite_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_scientifiques');
    }
};
