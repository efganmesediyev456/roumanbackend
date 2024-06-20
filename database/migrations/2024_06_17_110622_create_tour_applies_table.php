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
        Schema::create('tour_applies', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_id')->nullable();
            $table->string("name")->nullable();
            $table->string("phone")->nullable();

            $table->string("email")->nullable();
            $table->string("adults")->nullable();
            $table->string("kids")->nullable();
            $table->integer("car_id")->nullable();
            $table->tinyInteger('guide');
            $table->string('guide_language');
            $table->tinyInteger('activities');

            $table->longText("message")->nullable();
            $table->longText("permission")->default(0);






            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_applies');
    }
};
