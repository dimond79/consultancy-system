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
}
