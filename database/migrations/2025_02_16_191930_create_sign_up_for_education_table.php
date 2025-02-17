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
        Schema::create('sign_up_for_education', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('basic_studies');
            $table->string('name_and_seat_of_institution');
            $table->string('education_level');
            $table->integer('year_of_graduation');
            $table->string('occupation');
            $table->string('field_of_specialization');
            $table->string('specialization_name_and_seat_of_institution');
            $table->string('job_position');
            $table->string('work_experience_with_children');
            $table->string('most_frequently_addressed_issues');
            $table->string('institution_or_organization_work_with_children');
            $table->string('type_of_psychotherapy_modality');
            $table->string('achieved_level_of_education');
            $table->string('name_and_seat_of_organization');
            $table->string('length_of_psychotherapy_experience');
            $table->string('psychotherapy_work_with_children');
            $table->string('length_of_psychotherapy_work_with_children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign_up_for_education');
    }
};
