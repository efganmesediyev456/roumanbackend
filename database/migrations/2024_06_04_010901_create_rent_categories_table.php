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
        Schema::create('rent_categories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer("order")->default(0);
            $table->timestamps();
        });
        Schema::create('rent_category_translations', function(Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignId('rent_category_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->tinyInteger('status');
            $table->unique(['rent_category_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_categories');
    }
};
