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
     * this deletes and item and redirect to all events page 
     * @return:retuns to manage events page with success message 
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

    /**
     * update event informations
     */
    public function editEvent(Request $r){
        $event = Event::find($r->id);

        if($event){
            $event->title = $r->title;
            $event->location = $r->location;
            $event->description = $r->description;
            $event->updated_at = now();
            $event->save();
            return redirect()->back()->with('success', 'Event updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Event not found.');
        }
    }
}
