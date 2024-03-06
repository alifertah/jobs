<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * 
     */
    public function eventDetails($id){
        $event = Event::findOrFail($id);
        return(view("events.event_page", compact("event")));
    }
}
