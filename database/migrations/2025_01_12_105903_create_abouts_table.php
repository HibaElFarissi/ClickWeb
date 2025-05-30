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
        Schema::create('abouts', function (Blueprint $table) {
        $table->id();
        $table->string('title_1');
        $table->text('slug_1');
        $table->longText('photo_1')->nullable();
        $table->longText('photo_2')->nullable();
        $table->string('name_chairman');
        $table->string('work_chairman');
        $table->text('slug_chairman');
        $table->longText('photo_chairman')->nullable();
        $table->string('title_2');
        $table->text('slug_2');
        $table->text('our_vision');
        $table->text('our_mission');
        $table->string('title_philosophy');
        $table->text('supervision_post');
        $table->text('supervision_slug');
        $table->longText('supervision_photo')->nullable();
        $table->text('strength_post');
        $table->text('strength_slug');
        $table->longText('strength_photo')->nullable();
        $table->text('quality_post');
        $table->text('quality_slug');
        $table->longText('quality_photo')->nullable();
        $table->string('title_3');
        $table->string('title_team');
        $table->text('slug_team');
        $table->string('title_project');
        $table->text('slug_project');
        $table->string('title_pricing');
        $table->text('slug_pricing');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
