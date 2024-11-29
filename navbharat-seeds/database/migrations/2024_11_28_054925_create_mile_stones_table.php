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
        Schema::create('mile_stones', function (Blueprint $table) {
            $table->id();
            $table->string('title_01');
            $table->string('title_02');
            $table->string('title_03');
            $table->string('title_04');
            $table->longText('descriotion_01');
            $table->longText('descriotion_02');
            $table->longText('descriotion_03');
            $table->longText('descriotion_04');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mile_stones');
    }
};
