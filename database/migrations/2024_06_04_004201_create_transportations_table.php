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
        Schema::create('transportations', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer("order")->default(0);
            $table->double('price', 11,2)->nullable();
            $table->timestamps();
        });
        Schema::create('transportation_translations', function(Blueprint $table) {
            $table->id();
            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('title3')->nullable();
            $table->string('title4')->nullable();
            $table->string('title5')->nullable();
            $table->string('price_detail')->nullable();
            $table->foreignId('transportation_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->tinyInteger('status');
            $table->unique(['transportation_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportations');
    }
};
