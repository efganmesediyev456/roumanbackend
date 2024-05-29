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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('image', 255);
            $table->integer("order")->default(0);
            $table->timestamps();
        });

        Schema::create('about_us_translations', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("about_us_id");
            $table->foreign('about_us_id')->references("id")->on("about_us")->onDelete("cascade");
            $table->string('locale')->index()->nullable();
            $table->string('title')->nullable();
            $table->string('explore')->nullable();
            $table->string('explore_text')->nullable();
            $table->string('about_us_link')->nullable();
            $table->longText('content')->nullable();
            $table->tinyInteger('status');
            $table->unique(['about_us_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
