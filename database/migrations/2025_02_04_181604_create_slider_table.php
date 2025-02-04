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
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->json('slider_name');
            $table->json('slider_text')->nullable();
            $table->string('vertical');
            $table->string('horizontal');
            $table->integer('order');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider');
    }
};
