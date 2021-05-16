<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //User Side
    public function homePage(){
        return view('user.pages.homepage');
    }

    public function pageNotFound(){
        return view('user.error.page404');
    }

    //Admin Side

}
