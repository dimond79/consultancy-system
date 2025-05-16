<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        return view('dashboard.home.index');
    }

    public function client(){

        //fetching/reading data from database
        $courses = Course::all();
        // dd($courses->toArray());

        return view('dashboard.clients.client',compact('courses'));
    }

    public function create(Request $request){
        try{
            // dd($request->toArray());

            $data = $request->validate([
                'name' => 'string|max:50',
                'mobile' => 'string|max:20',
                'email' => 'string|required|unique:clients,email',
                'education' => 'string|required',
                'course_id' => 'required|integer',
                'percentage' => 'nullable|integer',
                'age' => 'nullable|integer',
                'message' => 'nullable|string'

            ]);

            Client::create($data);

            return back()->with('success','Data saved successfully.');



        }catch(\Exception $e){
            return back()->with('error','Something went wrong.'.$e->getMessage());

        }
    }
}
