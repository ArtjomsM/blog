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
        $email->email = $request->email;

        $email->save();

        $request->session()->flash('message', 'You have successfully subscribed!');
        return redirect('/');
    }

    public function send_email(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        $request->session()->flash('message', 'Message sent!');
        return redirect('/contact');
    }
}
