<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.content');
    }
    
    public function widgets(){
        return view('Admin.controlPanel.widgets');
    }

    public function calendar(){
        return view('Admin.controlPanel.calendar');
    }

    public function users(){
        return view('Admin.controlPlanel.users');
    }
}
