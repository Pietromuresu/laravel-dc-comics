<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers',
    ];

    public static function generateSlug($str){
        $slug = Str::slug($str, '-');
        $first_slug = $slug;
        $is_slug_used = Comic::where('slug', $slug)->first();
        $counter = "1";
        while($is_slug_used){
            $slug = $first_slug . $counter;
            $is_slug_used = Comic::where('slug', $slug)->first();
            $counter++;
        }
        return $slug;
    }
}
