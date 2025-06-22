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
        $clients = Client::with('Course')->get();
        // dd($clients->toArray());

        return view('dashboard.clients.client',compact('courses','clients'));
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

            return back()->with('success','User created successfully.');



        }catch(\Exception $e){
            return back()->with('error','Something went wrong.'.$e->getMessage());

        }
    }

    public function edit($id) {
        // reading from database
        // dd($id);
        $courses = Course::all();
        // dd($courses->toArray());
        $client = Client::with('course')->findOrFail($id);
        // dd($clients->toArray());

        return view('dashboard.clients.edit-client',compact('client','courses'));
    }

    public function update(Request $request){
        // dd($request->toArray());
        try {
            $data = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required',
            'email' => 'required|email',
            'education'  => 'required|string',
            'course_id' => 'nullable',
            'percentage' => 'nullable',
            'age' => 'nullable|numeric',
            'message' => 'nullable|string'


            ]);

            Client::create($data);

            return redirect()->route('admin.index')->with('success','Client data updated successfully.');
        }
        catch(\Exception $e){
            return redirect()->route('edit.client',['id'=> $request->client_id])->with('error', 'Something went wrong.'.$e->getMessage());
        }


    }

    public function delete($id){
        // dd($id);
        try{

            $client = Client::findOrFail($id);
            // dd($client->toArray());

            $client->delete();

            return redirect()->route('admin.index')->with('success','Client data delted successfully.');


        }
        catch(\Exception $e)
        {
            return redirect()->route('admin.client')->with('error','Something went wrong'.$e->getMessage());
        }

    }





}
