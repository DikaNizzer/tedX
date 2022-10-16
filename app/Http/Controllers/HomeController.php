<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = [
			'title' => 'TEDx Universitas Airlangga',
		];

        

        // return view('templates.header', $data);
        // return view('templates.navbar');
        // return view('templates.footer');
        return view('home', $data);
    }
}
