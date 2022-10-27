<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data = [
			'title' => 'TEDxUniversitasAirlangga',
		];

        

        
        
        // return view('templates.header', $data);
        // return view('templates.navbar');
        // return view('templates.footer');
        return view('home', $data);
    }
}
