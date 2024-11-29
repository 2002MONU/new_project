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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description1');
            $table->string('title2');
            $table->longText('description2');
            $table->longText('description3');
            $table->longText('description4');
            $table->string('images');
            $table->string('image_01');
            $table->string('image_02');
            $table->string('brocher_title');
            $table->string('pdf');
            $table->string('document');
            $table->string('contact');
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
        Schema::dropIfExists('services');
    }
};
