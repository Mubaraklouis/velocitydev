<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Jobs\SendContactEmailJob;
use App\Models\Contact;
use App\Models\User;
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
         // Dispatch the job to send emails  to the queue
         SendContactEmailJob::dispatch($request->email, $contact);


        return redirect()->back()->with('success', 'Contact created successfully');

    }

}
