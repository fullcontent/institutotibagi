<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use App\Models\Cursos;




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
        $noticia = Noticias::find($id);
        $lastNews = $this->lastNews();


        return view('site.noticia')->with([
            'noticias'=>$lastNews,
            'noticia'=>$noticia,

        ]);
    }


    public function noticias()
    {
        $post = Noticias::all();
        return $post;
    }


    public function cursos()
    {
        return Cursos::with('images')->get();
    }
    public function curso($nome='')
    {
        return Cursos::where('nome',$nome)->with('images')->get();
    }

    public function parceiros()
    {
        
        foreach (\Illuminate\Support\Facades\Storage::files('parceiros') as $filename) {
        $file = \Illuminate\Support\Facades\Storage::get($filename);
    // do whatever with $file;
}

    }

}
