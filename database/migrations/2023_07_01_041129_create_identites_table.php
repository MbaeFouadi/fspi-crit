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
        Schema::create('identites', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('fax');
            $table->string('langue');
            $table->integer('ile_id');
            $table->string('ville');
            $table->integer('grade_id');
            $table->integer('profession_id');
            $table->integer('etablissement_id');
            $table->string('departement');
            $table->string('laboratoire');
            $table->string('lien_google_scholar')->nullable();
            $table->string('lien_research_gate')->nullable();
            $table->string('lien_orcid')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identites');
    }
};
