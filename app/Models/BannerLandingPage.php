<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerLandingPage extends Model
{
    use HasFactory;

    public $fillable = [
        'main_text',
        'active',
        'image',
        'link',
    ];
}
