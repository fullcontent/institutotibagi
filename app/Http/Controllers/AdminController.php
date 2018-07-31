<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function usuarios()
    {
        $users = User::all();
        return view('admin.usuarios.index')->with('usuarios',$users);
    }

    public function noticias()
    {
      return view('admin.noticias.index');
    }

        
}
