<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Spatie\Translatable\HasTranslations;

class Sections extends Model
{
    use HasFactory, HasTranslations;

    protected $table = 'sections';
    
    protected $fillable = [
        'section_name',
        'title',
        'content',
        'btn_text',
        'btn_link',
        'order',
        'image',
        'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Section')
            ->logOnlyDirty();
    }
    
    public $translatable = ['title', 'content', 'btn_text', 'btn_link'];
}
