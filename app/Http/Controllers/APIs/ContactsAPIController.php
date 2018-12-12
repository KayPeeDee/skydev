<?php

namespace App\Http\Controllers\APIs;

use App\Http\Resources\ContactsResource;
use App\Models\Contacts;
use App\Traits\Contactable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsAPIController extends Controller
{
    use Contactable;

    public function __construct()
    {

    }

    public function index()
    {
        return ContactsResource::collection(Contacts::orderBy('created_at','DESC')->paginate(25));
    }


    public function addContact(Request $request)
    {
    }


}
