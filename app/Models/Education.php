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
        'occupation',
        'field_of_specialization',
        'job_position',
        'work_experience_with_children',
        'most_frequently_addressed_issues',
        'type_of_psychotherapy_modality',
        'achieved_level_of_education',
        'length_of_psychotherapy_experience',
        'psychotherapy_work_with_children',
    ];
}