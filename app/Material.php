<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function count()
    {
        return $this->hasOne('App\Count');
    }
}
