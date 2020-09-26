<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VasChargeModel extends Model
{

 protected $table = 'vas_charge';
 public $timestamps = true;
 protected $fillable = ['id','fuel_surcharge','docket_charge','risk_on_val','oda_min','min_weight','min_freight','payment_term','oda_pkg','gst','created_by'];

}
