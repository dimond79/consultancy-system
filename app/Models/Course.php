<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',
        'country',
        'status'
    ];

    //relation
    public function clients(){
        return $this->hasMany(Client::class);
    }
}
