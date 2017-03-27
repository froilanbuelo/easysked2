<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function schedules(){
		return $this->hasMany('App\Schedule');
	}
}
