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
        Schema::create('vegetable_crop_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vegetable_id');
            $table->string('slug');
            $table->string('type');
            $table->longText('description');
            $table->string('product_image');
            $table->string('brocher_image_01');
            $table->string('brocher_image_02');
            $table->string('brocher_01');
            $table->string('brocher_02');
            $table->longText('youtube_link');
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
        Schema::dropIfExists('vegetable_crop_categories');
    }
};
