<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviewsimage extends Model
{
    public function clientsreview()
    {
        return $this->belongsTo('App\User', 'clientsreviews_id');
    }
}
