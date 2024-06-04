<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Transportation extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $guarded=[];

    public $translatedAttributes = [
        'title1',
        'title2',
        'title3',
        'title4',
        'title5',
        'price_detail',
        'status'
    ];

    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediaable');
    }
}

