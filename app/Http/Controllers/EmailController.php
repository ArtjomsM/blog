<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use App\Models\Contact;

class EmailController extends Controller
{
    public function get_email(Request $request)
    {
        $email = new Email();
        $email->email = htmlentities(trim($request->email));

        $email->save();

        $request->session()->flash('message', 'You have successfully subscribed!');
        return redirect('/');
    }

    public function send_email(Request $request)
    {
        $contact = new Contact();
        $contact->name = htmlentities(trim($request->name));
        $contact->email = htmlentities(trim($request->email));
        $contact->message = htmlentities(trim($request->message));

        $contact->save();

        $request->session()->flash('message', 'Message sent!');
        return redirect('/contact');
    }
}
