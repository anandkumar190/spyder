<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZoneModel extends Model
{
	protected $table = 'zones';
	public $timestamps = true;
	protected $fillable = ['id','name','alias','status','count','location','created_by'];

}
