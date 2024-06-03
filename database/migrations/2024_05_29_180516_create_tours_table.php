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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer("order")->default(0);
            $table->double('price', 11,2)->nullable();
            $table->timestamps();
        });
        Schema::create('tour_translations', function(Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('address')->nullable();
            $table->string('price_detail')->nullable();
            $table->string('duration')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('transportation')->nullable();
            $table->string('cuisine')->nullable();
            $table->string('guide')->nullable();
            $table->longText('content')->nullable();
            $table->foreignId('tour_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->tinyInteger('status');
            $table->unique(['tour_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
