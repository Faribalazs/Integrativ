<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychotherapists extends Model
{
    use HasFactory;

    protected $table = 'psychotherapists';
    
    protected $fillable = [
        'name',
        'position',
        'location',
        'email',
        'phone',
        'image',
        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'lead'
    ];
}
