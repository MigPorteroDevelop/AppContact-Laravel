<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "phone_number",
        "age",
        "email",
        "user_id",
    ];

    public function user() {
        //"belongsTo" se usa para indicar que cada contacto pertenece a un solo usuario
        return $this->belongsTo(User::class);
    }
}
