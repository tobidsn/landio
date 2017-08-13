<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; 

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'price', 'short_description', 'description', 'status', 'category_id', 'link', 'view'];

    use Sluggable;

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
