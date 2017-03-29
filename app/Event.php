<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $dates = ['start','end'];
	public function calendar(){
		return $this->belongsTo('App\Calendar');
	}
	public function appointment(){
		return $this->belongsTo('App\Appointment');
	}
	public function invitees(){
		return $this->hasMany('App\Invitee');
	}
	public function getStartAtomFormatAttribute(){
		$date = Carbon::parse($this->attributes['start']);
		return $date->toAtomString();
	}
	public function getEndAtomFormatAttribute(){
		$date = Carbon::parse($this->attributes['end']);
		return $date->toAtomString();
	}
}
