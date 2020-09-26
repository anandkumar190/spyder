<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasepriceModel extends Model
{
    protected $table = 'c_prices';
    public $timestamps = true;
    protected $fillable = ['id','zone_from','zone_to','s_price','a_price','a_time','s_time','created_by'];
}
