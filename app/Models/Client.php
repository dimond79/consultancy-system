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
        'course_id',
        'percentage',
        'age',
        'status',
        'message'


    ];

    //relation
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
