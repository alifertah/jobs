<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function subscribe(Request $r){
        // $r->validate([
        //     'email' => 'required|email|unique:emails, email',
        // ]);
        $email = new Email();
        $email->email = $r->input('email');
        $email->save();

        return redirect()->back()->with('success', "You have been subscribed to the news letter");
    }   
}
