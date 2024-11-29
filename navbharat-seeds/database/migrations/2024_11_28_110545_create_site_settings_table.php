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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('header_logo');
            $table->string('footer_logo');
            $table->string('favicon');
            $table->string('cotton_bg')->nullable();
            $table->string('field_bg')->nullable();
            $table->string('vegetable_bg')->nullable();
            $table->string('head_bg')->nullable();
            $table->string('research_bg')->nullable();
            $table->string('processing_bg')->nullable();
            $table->string('outrich_bg')->nullable();
            $table->string('patnership_bg')->nullable();
            $table->string('export_bg')->nullable();
            $table->string('news_bg')->nullable();
            $table->string('farmer_bg')->nullable();
            $table->string('about_bg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
