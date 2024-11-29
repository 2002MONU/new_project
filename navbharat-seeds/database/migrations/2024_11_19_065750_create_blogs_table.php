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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('postBy');
            $table->longText('main_description');
            $table->longText('description_02');
            $table->longText('thought_title');
            $table->string('thought_user');
            $table->string('title_01');
            $table->longText('description_03');
            $table->string('main_image');
            $table->string('image_01');
            $table->string('image_02');
            $table->boolean('status');
            $table->integer('priority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
