<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use App\Models\Cursos;
use App\Models\Aprendizes;

use Mail;





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
        $cursosAdolescentes = Cursos::where([
                'tipo'=>'aprendizagem',
                ['nome','like','%adole%']
        ])->get();

        $cursosJovens = Cursos::where([
                'tipo'=>'aprendizagem',
                ['nome','like','%jove%']
        ])->get();



        

        return view('site.aprendiz')->with([

                'cursosAdolescentes'=>$cursosAdolescentes,
                'cursosJovens'=>$cursosJovens
        ]);


    }


    public function aprendizInscricao()
    {

       $listaCursos = Cursos::where('tipo','aprendizagem')->get(); 

       return view('site.aprendizIncricao')->with('cursos',$listaCursos);
    }


    public function aprendizInscricaoSEND(Request $request)
    {
       

          


        $aprendiz = new Aprendizes;

        $aprendiz->nome = $request->nome;
        $aprendiz->email = $request->email;
        $aprendiz->telefone = $request->telefone;
        $aprendiz->dataNasc = $request->dataNasc;
        $aprendiz->curso_id = $request->curso;
        
        $aprendiz->save();






        $data = array(
            'nome' => $aprendiz->nome,
            'email' => $aprendiz->email,
            'dataNasc' => $aprendiz->dataNasc,
            'telefone' => $aprendiz->telefone,
            'curso'    => $aprendiz->curso->nome,
            'subject' => 'Inscrição de aprendiz',
        );


        $mail = Mail::send('emails.inscricaoAprendiz', $data, function($message) use ($data){

                $message->from($data['email'],$data['nome']);
                $message->to('contato@institutotibagi.org.br');
                $message->subject($data['subject']);

        });


        if (Mail::failures()) {
         
        return redirect()->route('contato')
        ->with('error','Ops! Aconteceu alguma coisa errada, tente de novo!');

        }


        return back()->with('success','Inscrição efetuada com sucesso!');


    }




    public function empresas()
    {
        return view('site.empresas');
    }

    
    public function contato()
    {
        return view('site.contato');
    }

    public function contatoSEND(Request $request)
    {   


        $data = array(
            'email' => $request->email,
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'subject' => 'Contato através do site!',
            'mensagem' => $request->mensagem,
        );
        


        // return view('emails.contato')->with('data',$data);
        
        $mail = Mail::send('emails.contato', $data, function($message) use ($data){

                $message->from($data['email'],$data['nome']);
                $message->to('contato@institutotibagi.org.br');
                $message->subject($data['subject']);

        });


        if (Mail::failures()) {
         
        return redirect()->route('contato')
        ->with('error','Ops! Aconteceu alguma coisa errada, tente de novo!');

        }


        return back()->with('success','Email enviado com sucesso!');
   
    }







    public function lastNews()
    {
        $news = Noticias::take(5)->orderBy('created_at','desc')->get();

        return $news;

    }


    public function noticia($id='')
    {
        // $noticia = Noticias::find($id);
        $noticia = Noticias::with(['images'=> function($query){
            $query->where('post_type','=','noticia');
        }])->get()->find($id);



        $lastNews = $this->lastNews();


        return view('site.noticia')->with([
            'noticias'=>$lastNews,
            'noticia'=>$noticia,

        ]);
    }


    public function noticias()
    {
        $post = Noticias::with(['images'=> function($query){
            $query->where('post_type','=','noticia');
        }])->get();
        dd($post);
    }


    public function cursos()
    {   

        $cursos = Cursos::where('tipo','chave')->with('images')->get();
        return view('site.cursos')->with('cursos',$cursos);
    }

    public function curso($id='',$slug='')
    {   

        $curso = Cursos::with('images')->get()->find($id);

        return view('site.curso')->with('curso',$curso);
    }

    public function parceiros()
    {
        
        foreach (\Illuminate\Support\Facades\Storage::files('parceiros') as $filename) {
        $file = \Illuminate\Support\Facades\Storage::get($filename);
    // do whatever with $file;
        }

    }


    public function doacoes()
    {
        return view('site.doacoes');
    }

}
