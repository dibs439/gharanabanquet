<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('frontend/index');
    }

    public function occasions($slug) {
        if($slug == "weddings")
            return view('frontend/occasions/weddings');
    }

}
