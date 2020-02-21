<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function valuation()
    {
        return $this->hasMany('App\Valuation');
    }
}