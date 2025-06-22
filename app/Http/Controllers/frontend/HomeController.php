<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $courses = Course::all();
        // dd($data->toArray());
        return view('frontend.home.home',compact('courses'));
    }
}
