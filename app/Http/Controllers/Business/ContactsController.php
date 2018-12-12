<?php

namespace App\Http\Controllers\Business;

use App\Models\Business;
use App\Models\Contacts;
use App\Traits\Contactable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    use Contactable;

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Function to retrieve all business contacts/clients
    public function index()
    {
        $contacts = $this->getContacts(auth()->id());
        return view('business.contacts', compact('contacts'));
    }

    //THE FUNCTION TO ADD A NEW CONTACT BY THE BUSINESSES
    public function addContact(Request $request)
    {
        $contact_owner = Business::where('business_owner', $request->added_by)->first()->id;
        $contact_details = $request->except('contact_owner');
        $contact_details['contact_owner'] = $contact_owner;

        $this->validateContactDetails($request->all())->validate();
        //event(new Registered($user = $this->addNewContact($request->all())));

        $this->addNewContact($contact_details);
        return redirect()->back();
    }

    //This function is used to retrieve a single contact
    public function showContact($id)
    {
        $contact = $this->getContact($id);
        return view('business.contact', compact('contact'));
    }

    //This function is used to update a business contact by the owner of the contact
    public function updateContact(Request $request, $id)
    {
        $this->editContact($id, $request->all());
        return back();
    }

    //This function is used to delete business contact by the owner
    public function deleteContact($id)
    {
        return $this->trashThisContact($id);
    }
}
