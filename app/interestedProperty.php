<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interestedProperty extends Model
{
    protected $table = 'interested_properties';
    public function property()
    {
        return $this->belongsTo('App\Property', 'property_id');
    }
}
