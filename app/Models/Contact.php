<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //The values of several fields in a database table can be set in a single operation, 
    //instead of having to set each value individually.
    protected $fillable = [
        "name",
        "phone_number",
        "age",
        "email"
    ];
}
