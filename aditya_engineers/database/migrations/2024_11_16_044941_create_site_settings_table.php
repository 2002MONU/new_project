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
           $table->string('service_box_title');
            $table->string('client_heading');
            $table->string('gallery_title');
            $table->string('contact_heading');
            $table->string('contact_title');
            $table->longText('footer_title');
            $table->longText('testimonial_title');
            $table->longText('service_offering_title');
            $table->longText('about_banner');
            $table->longText('gallery_banner');
            $table->longText('service_banner');
            $table->longText('client_banner');
            $table->longText('contact_banner');
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
