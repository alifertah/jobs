<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    /**
     * this function shows the new event form
     * @return: returns the new event view
     */
    public function newEvent(){
        return (view("organisator.new_event"));
    }

    /**
     * this fucntion creates a new event
     */
    public function createEvent(Request $r){
        
        $newEvent = new Event();
        $newEvent->title = $r->title;
        $newEvent->organiser = auth()->user()->email;
        $newEvent->description = $r->description;
        $newEvent->date = $r->date;
        $newEvent->category = $r->category;
        $newEvent->location = $r->location;
        $newEvent->available_seats = $r->available_seats;
        $newEvent->save();
    }

    /**
     * statistics view
     * @return: view to the statistics page
     */
     public function ograniserStatistics(){
        return (view("organisator.statistics"));
     }

     /**
      * manageEvents view
      * @return: view to the manage events page
      */
    public function manageEventsView(){
        $e = new Event();
        $allEvents = $e->all();
        return view("organisator.manage_events", compact("allEvents"));
    }
}
