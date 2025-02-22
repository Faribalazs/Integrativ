<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Activities extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'activities';
    
    protected $fillable = [
        'name',
        'content',
        'image',
        'order'
    ];

    public $translatable = ['name', 'content'];
}
