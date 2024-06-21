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
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->string("fullname")->nullable();
            $table->string("phone")->nullable();
            $table->string("starting_in")->nullable();
            $table->string("ending_in")->nullable();
            $table->date("start_date")->nullable();
            $table->date("end_date")->nullable();
            $table->integer("adults")->nullable();
            $table->integer("kids")->nullable();
            $table->integer("rate")->nullable();
            $table->tinyInteger("policy")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plannings');
    }
};
