<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactUsFormController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
        return view('publicside.contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('success', 'Merci de m\'avoir contacté !');

    }

}
