<?php

namespace App\Http\Controllers\Volunteer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VolunteerPage extends Controller
{
    public function index(){
        return view('volunteer');
    }
}
