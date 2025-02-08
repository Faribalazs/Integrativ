<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class HomePageContent extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'home_page_content';
    
    protected $fillable = [
        'section_name',
        'section_title',
        'section_content',
        'section_image',
        'order'
    ];

    public $translatable = ['section_name', 'section_title', 'section_content'];
}
