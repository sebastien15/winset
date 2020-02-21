<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageAgent extends Model
{
    public function agent()
    {
        return $this->belongsTo('App\Agent', 'agent_id');
    }
}
