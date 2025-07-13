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

        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client')->nullable(); // ✅ recommandé : noms en minuscule
            $table->longText('photo')->nullable();
            $table->longText('code_video')->nullable();

            $table->foreignId('categorie_video_id') // ✅ syntaxe Laravel plus propre
                ->constrained('categorie__videos')
                ->onDelete('cascade'); // facultatif, selon logique métier

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
