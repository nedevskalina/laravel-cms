<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;


    protected $table = 'settings';

    protected $fillable = [
        'title',
        'mainurl',
        'email',
        'description',
        'logo',
        'address',
        'phone',
        'twitter',
        'facebook',
        'skype',
        'linkedin',
        'youtube',
        'flickr',
        'pinterest',
        'user_id',
        'lat',
        'lng',

    ];


}
