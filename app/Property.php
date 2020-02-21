<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function location()
    {
        return $this->belongsTo('App\Location', 'location_id');
    }

    public function imageProperty()
    {
        return $this->hasMany('App\Imageproperty', 'property_id');
    }

    public function interest()
    {
        return $this->hasMany('App\interestedProperty', 'property_id');
    }
    public function type()
    {
        return $this->belongsTo('App\Type', 'type_id');
    }
    public function detail()
    {
        return $this->belongsTo('App\Detail');
    }
}
