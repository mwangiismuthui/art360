<?php

namespace App;

use App\Feature;
use Illuminate\Database\Eloquent\Model;
use App\Gallery;

class Listing extends Model
{


    /**
     * Get the listing's category name.
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id', 'id');
    }

    public function features(){
        return $this->belongsToMany(Feature::class);
    }

    public function gallery(){
        return $this->hasMany(Gallery::class);
    }
}
