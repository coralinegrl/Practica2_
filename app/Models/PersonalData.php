<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        'name',
        'lastname',
        'email',
        'city',
        'country',
        'summary',
    ];

}
