<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
    	$events = Auth::user()->events()->with('invitees')->orderBy('start')->get(); //->where('start','>=',Carbon::now())
    	$data = array();
    	foreach($events as $event){
    		$data[] = array(
    			'start'=>$event->startAtomFormat,
    			'end'=>$event->endAtomFormat,
    		);
    	}
        return response(json_encode(['message'=>'Success','data'=>$data]),200);
    }
}
