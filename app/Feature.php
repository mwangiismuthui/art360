<?php

namespace App;
use App\Listing;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function listing(){
        return $this->belongsToMany(Listing::class);
    }
}
