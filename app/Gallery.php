<?php

namespace App;
use App\Model\Listing;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  public function listing(){
      return $this->belongsTo(Listing::class);
  }
}
