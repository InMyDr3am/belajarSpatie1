<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;


class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title', 'desc'
    ];

    public function photos()
    {
        return $this->morphMany(Media::class, 'model');
    }

    public function items()
    {
        return $this->morphMany(Media::class, 'model');
    }

    
}
