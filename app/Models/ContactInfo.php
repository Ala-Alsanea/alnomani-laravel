<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    public $fillable = [
        'phone_1',
        'phone_2',
        'phone_whatsapp',
        'email',
        'facebook_link',
        'insta_link',

    ];
}
