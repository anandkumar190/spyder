<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HandlingChargesModel extends Model
{
   protected $table = 'handling_charge';
   public $timestamps = true;
   protected $fillable = ['id','min','max','price','created_by'];

}
