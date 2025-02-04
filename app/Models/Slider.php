<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'slider';
    
    protected $fillable = [
        'slider_name',
        'slider_text',
        'image',
        'vertical',
        'horizontal',
        'order'
    ];

    public $translatable = ['slider_text', 'slider_name'];
}
