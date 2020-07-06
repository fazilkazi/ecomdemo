<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catagory()
    {
      return  $this->belongsTo(Catagory::class);
    }
}
