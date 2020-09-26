<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaneModel extends Model
{
    protected $table = 'spyder_plans';
    public $timestamps = true;
    protected $fillable = ['id','name','base_charge','status','fod','cod','fuel_surcharge','docket_charge','risk_on_val','oda_min','min_weight',' min_freight','payment_term','oda_pkg','gst'];


}
