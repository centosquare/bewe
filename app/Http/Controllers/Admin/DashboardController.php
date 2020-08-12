<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{


    public function dashboardView()
    {
        
        $users = User::Select('users.*', 'countries.country_name')
        ->join('countries', 'countries.id', 'users.country_id')
        ->get();
        return view("dashboard")->with('users',$users);
    }
}
