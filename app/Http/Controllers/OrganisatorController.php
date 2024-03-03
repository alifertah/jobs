<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    public function newEvent(){
        return (view("organisator.new_event"));
    }
}
