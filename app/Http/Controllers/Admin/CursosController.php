<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cursos;
use App\Models\Image;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($message='')
    {
        //

        $cursos = Cursos::all();
        return view('admin.cursos.index')->with(['cursos'=>$cursos,'message'=>$message]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $curso = new Cursos;

        $curso->nome = $request->nome;
        $curso->descritivo = $request->descritivo;
        $curso->tipo = $request->tipo;
        $curso->duracao = $request->duracao;
        $curso->investimento = $request->investimento;
        $curso->criterios = $request->criterios;
        $curso->ementa = $request->ementa;
        $curso->area = $request->area;
        $curso->processo = $request->processo;
        
        // Itens nulos por hora

        $curso->local = "Instituto Tibagi";
        $curso->save();
        
       
        if($request->file('img'))
        {
        $path = $request->file('img')->store('uploads','public');

        $img = new Image;
        $img->filename = $path;

        $img->post_id = $curso->id;
        $img->post_type = 'curso';

        $img->save();
        $curso->img = $img->filename;

        }
                


        
        \Session::flash('msg', "Novo curso inserido com sucesso!");
        return redirect(route('cursos.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Cursos::find($id);
        return view('admin.cursos.edit')->with('curso',$curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $curso = Cursos::find($id);
        return view('admin.cursos.edit')->with('curso',$curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

            

            \Session::flash('msg', "Curso editado com sucesso!");
            return redirect(route('cursos.index')); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Cursos::find($id);
        $curso->delete();

        \Session::flash('msg', "Curso removido com sucesso!");
        return redirect(route('cursos.index'));
    }
}
