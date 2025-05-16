<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){
        return view('dashboard.home.index');
    }

    public function client(){
        return view('dashboard.clients.client');
    }

    public function create(Request $request){
        try{
            // dd($request->toArray());

            $data = $request->validate([
                'name' => 'string|max:50',
                'mobile' => 'string|max:20',
                'email' => 'string|required|unique:table,column,except,id'
            ]);



        }catch(\Exception $e){

        }
    }
}
