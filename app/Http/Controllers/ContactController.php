<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Mail\ContactRecieveMail;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\contactReceiveNotification;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return  mixed of contacts in a table
     */
    public function index()
    {
        $contact = Contact::latest()->paginate(6);

        return Inertia::render('contact/contacts', [
            'contacts' => $contact
        ]);

    }

    /**
     * Store a newly created contact in the datbase in storage.
     * @return mixed
     */
    public function store(StoreContactRequest $request)
    {

        $contact = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'country' => 'required'
        ]);

        $contact = [
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'country' => $request->country,
            'company' => $request->company

        ];

        //store the contact in the database

        Contact::create($contact);

        //send email to the client that thier email has been recieved
        Mail::to($request->email)->send(new ContactRecieveMail($contact));

        //send the email to the admin that a client  that a cleint send a request
        $client = Contact::where('email',$contact['email'])->first();

        //find the user to send the email to
        $email = env('MAIL_FROM_ADDRESS');
        $admin = User::where('email',$email)->first();
        $admin->notify(new contactReceiveNotification($client));

        return redirect()->back()->with('success', 'Contact created successfully');

    }

}
