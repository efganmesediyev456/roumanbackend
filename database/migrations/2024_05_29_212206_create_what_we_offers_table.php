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
        Schema::create('what_we_offers', function (Blueprint $table) {
            $table->id();
            $table->string('number', 255);
            $table->integer("order")->nullable();
            $table->timestamps();
        });

        Schema::create('what_we_offer_translations', function(Blueprint $table) {
            $table->id();
            $table->foreignId('what_we_offer_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->string('position')->nullable();
            $table->string('subtitle')->nullable();
            $table->tinyInteger('status');
            $table->unique(['what_we_offer_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('what_we_offer_translations');
        Schema::dropIfExists('what_we_offers');
    }
};
