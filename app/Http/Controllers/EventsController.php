<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\event_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    
    /**
     * this updates the status of an existing booking request to true
     *  @return: redirection to the event page
     */
    public function booking(Request $r){
        $u = $user = Auth::user();
        $user = User::find($u->id);
        $event = Event::find($r->id);
        $user->events()->updateExistingPivot($event->id, ['approved' => true]); 
        $event->available_seats--;
        $event->save();
        return redirect()->back()->with('success', 'Event booked successfully.');
    }
    
    /**
     * this function in case the organiser must approve the booking we set the
     *  approuved to false and we wait the organiser to approuve
     */
    public function bookNow(Request $r){
        $u = $user = Auth::user();
        $user = User::find($u->id);
        $event = Event::find($r->id);
        $user->events()->attach($event->id, ['approved' => false]);
        return redirect()->back()->with('success', 'We will notify the organiser.');
    }

    /**
     * this function executes bothe of em because its auto 
     */
    public function autoBooking(Request $r){
        $this->bookNow($r);
        $this->booking($r);
        return redirect()->back()->with('success', 'Event booked successfully.');
    }
    
    /**
     * 
     */
    public function accpetBooking(Request $r){
        $booking = event_user::findOrFail($r->id);
        $booking->approved = true;
        $booking->save();
        return redirect()->back()->with('success', 'Booking accepted successfully.');
    }
}
