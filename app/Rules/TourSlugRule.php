<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class TourSlugRule implements Rule
{
    protected $currentId;

    public function __construct($currentId = null)
    {
        $this->currentId = $currentId;
    }

    public function passes($attribute, $value)
    {
        // Convert value to slug (you can use a library or Laravel's Str::slug)
        $slug = \Illuminate\Support\Str::slug($value);

        // Check if the slug exists in the database excluding the current record
        $query = DB::table('tours')->where('slug', $slug);
        
        if ($this->currentId !== null) {
            $query->where('id', '!=', $this->currentId);
        }
        
        $exists = $query->exists();

        return !$exists; // Return true if slug does not exist (passes validation)
    }

    public function message()
    {
        return 'The tour slug must be unique.';
    }
}
