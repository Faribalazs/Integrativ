<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'sign_up_for_education';

    protected $fillable = [
        'name',
        'date_of_birth',
        'address',
        'email',
        'phone',
        'basic_studies',
        'name_and_seat_of_institution',
        'education_level',
        'year_of_graduation',
        'occupation',
        'field_of_specialization',
        'specialization_name_and_seat_of_institution',
        'job_position',
        'work_experience_with_children',
        'most_frequently_addressed_issues',
        'institution_or_organization_work_with_children',
        'type_of_psychotherapy_modality',
        'achieved_level_of_education',
        'name_and_seat_of_organization',
        'length_of_psychotherapy_experience',
        'psychotherapy_work_with_children',
        'length_of_psychotherapy_work_with_children'
    ];
}
