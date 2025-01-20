<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {




        $contact = new Contact();
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->number = $request->phone_number;
        $contact->email = $request->email;
        $contact->message = $request->message;

        // Save the contact into the database
        $contact->save();

        // Optionally, you can process further logic here, like sending an email

        try {
            Mail::to('mangilalprajapat3@gmail.com')->send(new ContactUsMail($contact));
        } catch (\Throwable $th) {
            //throw $th;
        }

        // Store the form data in a session for display in the view
        $request->session()->flash('contact_form_data', $request->only(['first_name', 'last_name', 'phone_number', 'email', 'message']));

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}