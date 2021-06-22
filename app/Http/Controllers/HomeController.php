<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $data = []; // the information we send to the view

    public function index()
    {
        return view('home', $this->data);
    }

}
