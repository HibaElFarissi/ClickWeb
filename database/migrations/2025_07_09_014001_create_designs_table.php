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

    Schema::create('designs', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('client')->nullable(); // Client en minuscule recommandé
        $table->longText('photo')->nullable();
        $table->unsignedBigInteger('categorie__design_id');
        $table->foreign('categorie__design_id')->references('id')->on('categorie__designs');
        $table->timestamps();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
