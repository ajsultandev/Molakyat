<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialCenter extends Model
{
    //
    protected $table = 'financial_center'; 


    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
