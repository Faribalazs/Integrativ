<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'categories';

    public $timestamps = false;
    
    protected $fillable = [
        'image',
        'category_name',
    ];

    public $translatable = ['category_name'];
}
