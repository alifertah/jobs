<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\event_user;
use App\Models\EventUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class OrganisatorController extends Controller
{
    /**
     * this function shows the new event form
     * @return: returns the new event view
     */
    public function newEvent(){
        $categories = Category::all();
        return (view("organisator.new_event", compact("categories")));
    }

    /**
     * this fucntion creates a new event
     */
    public function createEvent(Request $r){
        
        $newEvent = new Event();
        $newEvent->title = $r->title;
        $newEvent->organiser = auth()->user()->email;
        $newEvent->description = $r->description;
        $newEvent->booking_type = $r->booking;
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

        // $allEvents = Cache::remember('all_events', 1440, function () {
        //     $e = new Event();
        //     return $e->all();
        // });
    
        // return view("organisator.manage_events", compact("allEvents"));
    }

    /**
     * this function returns the organiser dashboard view
     */
    public function organiser(){
        $booking = event_user::all();
        $events = Event::all();

        $data = compact("booking", "events");
        return (view("organisator.dashboard", compact("data")));
    }
}
