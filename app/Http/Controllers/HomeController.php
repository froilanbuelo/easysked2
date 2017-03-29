<?php

namespace App\Http\Controllers;

use App\Googl;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($view = 'list')
    {
        // $client = $googl->client();
        // if ($request->has('code')) {
        //     $appointments = Auth::user()->appointments;
        //     return view('home',compact('appointments'));
        // }else{
        //     $auth_url = $client->createAuthUrl();
        //     return redirect($auth_url);
        // }
        // $appointments = Auth::user()->appointments;
        // return view('home',compact('appointments'));
        $events = Auth::user()->events()->with('invitees')->where('start','>=',Carbon::now())->orderBy('start')->get();
        if($view == 'list')
            return view('home',compact('events'));
        else
            return view('home_calendar',compact('events'));    
    }
    public function calendar(Googl $googl, Request $request){
        $client = $googl->client();
        if ($request->has('code')) {
        }else{
            $auth_url = $client->createAuthUrl();
            return redirect($auth_url);
        }
    }
}
