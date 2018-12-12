<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Bridge\User;

class Business extends Model
{
    protected $fillable = [
        'business_owner','name','email','phone','address'
    ];

    public function owner()
    {
        return $this->hasMany(User::class);
    }
}
