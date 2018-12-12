<?php
/**
 * Created by PhpStorm.
 * User: munya
 * Date: 2018/11/22
 * Time: 11:39 PM
 */
namespace App\Traits;


use App\Models\Business;
use App\Models\Contacts;
use Illuminate\Support\Facades\Validator;

trait Contactable
{
    //This function is used to add new contact
    public function addNewContact( array $data)
    {
        $contact_owner =  Business::where('business_owner', $data['added_by'])->first()->id;
        return Contacts::create([
            'contact_owner' => $contact_owner,
            'added_by' => $data['added_by'],
            'client_name' => $data['client_name'],
            'client_surname' => $data['client_surname'],
            'company' => $data['company'],
            'position' => $data['position'],
            'personal_mobile' => $data['personal_mobile'],
            'work_mobile' => $data['work_mobile'],
            'email' => $data['email'],
            'facebook_id' => $data['facebook_id'],
            'twitter_handler' => $data['twitter_handler'],
            'instagram_id' => $data['instagram_id'],
            'whatsapp_number' => $data['whatsapp_number'],
        ]);
    }


    //This is the function for validating the data for contact details
    public function validateContactDetails(array $data)
    {
        return Validator::make($data, [

            'client_name' => 'required|string|max:100',
            'client_surname' => 'required|string|max:100',
            'company' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'personal_mobile' => 'required|string|max:12',
        ]);
    }

    //This function is used to retrieve all business contacts by the owner
    public function getContacts($id)
    {
        return Contacts::where('added_by', $id)->orderBy('created_at','DESC')->get();
    }

    //This function is used to access a single Contact
    public function getContact($id)
    {
        return Contacts::find($id);
    }

    //This trait function is used by the business owner to delete a contact
    public function trashThisContact($id)
    {
        return Contacts::destroy($id);
    }

    //This trait function is used to edit and update a contact by the owner
    public function editContact($id, array $data)
    {
        $contact = Contacts::find($id);

        return $contact->update([
            'client_name' => $data['client_name'],
            'client_surname' => $data['client_surname'],
            'company' => $data['company'],
            'position' => $data['position'],
            'personal_mobile' => $data['personal_mobile'],
            'work_mobile' => $data['work_mobile'],
            'email' => $data['email'],
            'facebook_id' => $data['facebook_id'],
            'twitter_handler' => $data['twitter_handler'],
            'instagram_id' => $data['instagram_id'],
            'whatsapp_number' => $data['whatsapp_number'],
        ]);
    }




}