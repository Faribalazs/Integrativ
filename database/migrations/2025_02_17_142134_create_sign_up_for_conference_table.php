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
        Schema::create('sign_up_for_conference', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('occupation');
            $table->string('email');
            $table->string('phone');
            $table->string('institution_or_company_name');
            $table->string('pib');
            $table->string('city');
            $table->string('postcode');
            $table->string('contact_phone');
            $table->string('institution_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign_up_for_conference');
    }
};
