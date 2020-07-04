<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class BlogPostsCategory extends Model
{
    protected $fillable = ['type', 'name', 'slug', 'order'];
    public $timestamps = false;

    public function posts ()
    {
    	return $this->hasMany('\App\BlogPost');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public static function storeCategory ($inputs)
    {
        $category = BlogPostsCategory::create([
            'type' => $inputs['type'],
            'name' => $inputs['name'],
            'slug' => $inputs['slug'],
            'order' => $inputs['order'],
        ]);
        return $category;
      
    }

    public static function updateCategory ($inputs, $category)
    {
        $category->update([
            'name' => $inputs['name'],
            'slug' => $inputs['slug'],
            'order' => $inputs['order'],
        ]);
        $category;
    }

}
