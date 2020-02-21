<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientsreview extends Model
{
    public function reviewsimage()
    {
        return $this->hasMany('App\reviewsimage', 'clientsreviews_id');
    }
}
