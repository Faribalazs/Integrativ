<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUpConference extends Model
{
    use HasFactory;

    protected $table = 'sign_up_for_conference';

    protected $fillable = [
        'name',
        'address',
        'occupation',
        'email',
        'phone',
        'institution_or_company_name',
        'pib',
        'city',
        'postcode',
        'contact_phone',
        'institution_email'
    ];
}
