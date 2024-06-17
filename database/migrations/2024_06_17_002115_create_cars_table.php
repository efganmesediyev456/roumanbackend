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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(0);
            $table->string("image")->nullable();
            $table->timestamps();
        });

        Schema::create('car_translations', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->tinyInteger('status');
            $table->unique(['car_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
