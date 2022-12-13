<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $terms)
    {
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term) use ($query){
                $term = '%' . $term . '%';

                $query->where('main_dish', 'like', $term)
                      ->orWhere('dessert', 'like', $term);
            });
    }
}
