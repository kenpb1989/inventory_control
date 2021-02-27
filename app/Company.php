<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function material()
    {
        return $this->hasOne('App\Material');
    }
}
