<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homePageControllers extends Controller
{
    public function show(){
        return view("backend.home.homeindex");
    }
}
