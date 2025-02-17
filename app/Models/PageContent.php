<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PageContent extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'page_content';
    
    protected $fillable = [
        'page_id',
        'title',
        'image',
        'content',
        'order',
        'custom_design',
        'form'
    ];

    public $translatable = ['title', 'content'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
