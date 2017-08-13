<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable; 

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'short_description', 'status'];

    use Sluggable;

    public function products()
    {
    	return $this->hasMany('App\Product');
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
