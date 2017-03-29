<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitee extends Model
{
	public function event(){
		return $this->belongsTo('App\Event');
	}
}
