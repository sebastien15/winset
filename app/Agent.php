<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function imageAgent()
    {
        return $this->hasMany('App\ImageAgent', 'agent_id');
    }
}
