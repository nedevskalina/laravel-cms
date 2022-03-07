<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scripts extends Model
{
    use HasFactory;

    protected $table='scripts';

    protected $fillable = [
        'name',
        'script_code',
        'active'
    ];


}
