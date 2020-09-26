<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PincodeModel extends Model
{
    protected $table = 'pincodes';
    public $timestamps = true;
    protected $fillable = ['id','zone_fk_id	','city','pincode','is_oda','is_serviceable','is_cod','is_prepaid','status','created_by'];
}
