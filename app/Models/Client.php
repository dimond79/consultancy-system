<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'education',
        'course',
        'percentage',
        'age',
        'status'


    ];
}
