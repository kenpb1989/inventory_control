<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    public function material()
    {
        return $this->belongTo('App\Material');
    }
}
