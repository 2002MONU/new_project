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
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->integer('contact');
            $table->integer('whatsapps')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('footer_about');
            $table->string('office_time');
            $table->longText('facebook_link');
            $table->longText('twitter_link');
            $table->longText('linkedin_link');
            $table->longText('youtube_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_details');
    }
};
