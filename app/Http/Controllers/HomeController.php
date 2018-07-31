<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;


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

        $lastNews = $this->lastNews();

        return view('site.home')->with('noticias',$lastNews);
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




    public function lastNews()
    {
        $news = Noticias::take(5)->orderBy('created_at','desc')->get();

        return $news;

    }


    public function noticia($id='')
    {
        $post = Noticias::find($id);
        return $post;
    }


    public function noticias()
    {
        $post = Noticias::all();
        return $post;
    }

}
