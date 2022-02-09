<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventoController extends Controller
{
    public function index(){

        $events =Event::all();
        return view('welcome',['events'=> $events]);
        
    }

    public function create(){
        return view('events.create');
    }
}
