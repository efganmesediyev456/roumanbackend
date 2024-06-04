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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer("order")->default(0);
            $table->foreignId('rent_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('rent_translations', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();
            $table->string('price_detail')->nullable();
            $table->foreignId('rent_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->tinyInteger('status');
            $table->unique(['rent_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
