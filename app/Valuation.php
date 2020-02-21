<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    public function companies()
    {
        return $this->belongsTo('App\Company', 'company_id');
    }
    public function banks()
    {
        return $this->belongsTo('App\Bank', 'bank_id');
    }
}
