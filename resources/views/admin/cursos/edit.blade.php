@extends('adminlte::page')


@section('title', 'Cursos')

@section('content_header')
    <h1>Editando o curso: {{$curso->nome}}</h1>
@stop

@section('content')


<div class="container-fluid">

		<form action="{{route('cursos.update', $curso->id)}}" method="post">
             {!! csrf_field() !!}
             
               <input name="_method" type="hidden" value="PUT">


    <div class="col-md-6">
    	 <div class="form-group">
				<label for="title">Nome do curso</label>
                    <input type="text" name="nome" class="form-control" 
                           placeholder="Insira o nome do curso" required value="{{$curso->nome}}">
      </div>

      <div class="form-group">
        <label for="title">Breve descritivo do curso</label>
                    <input type="text" name="descritivo" class="form-control" 
                           placeholder="Descreva brevemente o curso." required value="{{$curso->descritivo}}">
      </div>

      <div class="form-group">
                  <label>Tipo</label>
                  <select class="form-control" name="tipo">
                  	<option value="{{$curso->tipo}}" selected>{{$curso->tipo}}</option>
                    <option value="chave">CHAVE</option>
                    <option value="aprendizagem">Aprendizagem</option>
                  </select>
      </div>

      <div class="form-group">
        <label for="title">Duração</label>
                    <input type="text" name="duracao" class="form-control" 
                           placeholder="Insira a duração do curso" required value="{{$curso->duracao}}">
      </div>

      <div class="form-group">
        <label for="title">Investimento</label>
                    <input type="text" name="investimento" class="form-control" 
                           placeholder="Insira o investimento do curso" required value="{{$curso->investimento}}">
      </div>

      <div class="form-group">
				<label for="content">Critérios</label>
				<textarea name="criterios" id="" cols="10" rows="5" >{{$curso->criterios}}</textarea>
			</div>
      
      <div class="form-group">
        <label for="content">Ementa</label>
        <textarea name="ementa" id="" cols="10" rows="5">{{$curso->ementa}}</textarea>
      </div>

    </div>
	 

	 <div class="col-md-6">	
				


      <div class="form-group">
        <label for="content">Área de atuação</label>
        <textarea name="area" id="" cols="10" rows="5">{{$curso->area}}</textarea>
      </div>

      <div class="form-group">
        <label for="content">Processo Seletivo</label>
        <textarea name="processo" id="" cols="10" rows="5">{{$curso->processo}}</textarea>
      </div>

      


        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
         </form>
	 </div>

		

      


      </div>
      

<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'criterios' );
        CKEDITOR.replace( 'ementa' );
        CKEDITOR.replace( 'area' );
        CKEDITOR.replace( 'processo' );

    </script>


@stop