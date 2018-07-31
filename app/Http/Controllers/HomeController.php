<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.home');
    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function aprendiz()
    {
        return view('site.aprendiz');
    }

    public function contato()
    {
        return view('site.contato');
    }


}
