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
        Schema::create('notable_achievements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_01');
            $table->string('title_02');
            $table->string('title_03');
            $table->string('title_04');
            $table->string('title_05');
            $table->longText('description_01');
            $table->longText('description_02');
            $table->longText('description_03');
            $table->longText('description_04');
            $table->longText('description_05');
            $table->string('image_01');
            $table->string('image_02');
            $table->string('image_03');
            $table->string('image_04');
            $table->string('image_05');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notable_achievements');
    }
};
