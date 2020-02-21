<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function valuation()
    {
        return $this->hasMany('App\Valuation');
    }
}
