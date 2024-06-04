<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $guarded=[];

    public $translatedAttributes = [
        'title',
        'title2',
        'title3',
        'title4',
        'price_detail',
        'status'
    ];
}
