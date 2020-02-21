<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function property()
    {
        return $this->hasOne('App\Property');
    }
}
