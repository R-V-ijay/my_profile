<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clint_data extends Model
{
    use HasFactory;
    protected $connection = 'my_profile_db';

    protected $fillable = [
        'first_name','last_name','email','phone_number','message'
    ];
}
