<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\contactReceiveNotification;
use App\services\Emailservice as ServicesEmailservice;
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

        //resolve the sending email service
        $emailService = app( ServicesEmailservice::class,[
            'email'=>$request->email,
            'client'=>$contact
        ]);
        //send email to the client
        $emailService->sendCleintEmail();
        //send the email to the admin that a client  that a cleint send a request
        $emailService->sendAdminEmail();

        return redirect()->back()->with('success', 'Contact created successfully');

    }

}
