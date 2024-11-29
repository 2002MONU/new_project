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
        Schema::create('innovatives', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_01');
            $table->string('title_02');
            $table->string('title_03');
            $table->string('title_04');
            $table->longText('description_01');
            $table->longText('description_02');
            $table->longText('description_03');
            $table->longText('description_04');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('innovatives');
    }
};
