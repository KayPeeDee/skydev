<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable = [
        'contact_owner','client_name','client_surname','company','position','personal_mobile','work_mobile','email',
        'facebook_id','twitter_handler','instagram_id','whatsapp_number','added_by'
        ];
}
