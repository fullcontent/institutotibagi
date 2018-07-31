<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Noticias;
use App\Models\Image;




use Illuminate\Support\Facades\Auth;



class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $noticias = Noticias::with('user','images')->get();


        return view('admin.noticias.index')->with('noticias',$noticias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $post = new Noticias;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->status = $request->status;
        $post->user_id = Auth::id();
        $post->save();


        if($request->file('img'))
        {
        $path = $request->file('img')->store('uploads','public');

        $img = new Image;
        $img->filename = $path;

        $img->post_id = $post->id;
        $img->post_type = 'noticias';
        $img->save();

        }
        


        return redirect(route('noticias.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       
        $noticia = Noticias::find($request->id);

        $noticia->title = $request->title;
        $noticia->content = $request->editContent;
        $noticia->created_at = date("Y-m-d H:i:s");

        $noticia->save();


        return redirect(route('noticias.index'));



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
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticias::find($id);
        $noticia->delete();
        return redirect(route('noticias.index'));
    }
}
