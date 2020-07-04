<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'type', 
        'title', 
        'short_description',
        'post_content', 
        'status', 
        'featured_image',
        'slug',
        'meta_title',
        'meta_description',
        'post_category_id'
    ];

    public function category ()
    {
        return $this->belongsTo('\App\BlogPostsCategory');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
