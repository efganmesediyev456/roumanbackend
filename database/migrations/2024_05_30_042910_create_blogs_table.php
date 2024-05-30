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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->string('image', 255);
            $table->timestamps();
        });

        Schema::create('blog_translations', function(Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index()->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('tags')->nullable();
            $table->longText('content')->nullable();
            $table->tinyInteger('status');
            $table->unique(['blog_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
