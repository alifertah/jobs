<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     *this shows even details page
     */
    public function eventDetails($id){
        $event = Event::findOrFail($id);
        return(view("events.event_page", compact("event")));
    }

    /**
     * 
     */
    public function deleteEvent(Request $r){
        $event = Event::find($r->id);

        if($event){
            $event->delete();
            return redirect()->route("manageEventsView")->with("success", "item deleted successfully!");
        } else {
            return redirect()->route("manageEventsView")->with("Error", "Event not found");
        }
    }
}
