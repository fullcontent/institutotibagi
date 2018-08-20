@extends('adminlte::page')


@section('title', 'Cursos')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')
    
      
    @if(Session::has('msg'))
        
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Bom trabalho!</h4>
                {!! Session::get("msg") !!}
        </div>

    @endif

  



    <div class="col-md-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Curso</th>
                  <th>Duração</th>
                  <th>Investimento</th>
                  <th>Local</th>
                  <th>Tipo</th>
                  <th>Ações</th>
                </tr>
                @if(count($cursos))
               @foreach($cursos as $curso)


              <tr>
               	<td>{{$curso->id}}</td>
               	<td>{{$curso->nome}}</td>
               	<td>{{$curso->duracao}}</td>
               	<td>R$ {{$curso->investimento}}</td>
               	<td>{{$curso->local}}</td>
               	<td>{{$curso->tipo}}</td>
               	<td><form action="{{ route('cursos.destroy' , $curso->id)}}" method="POST">
                      <input type="hidden" name="_method" value="DELETE" />{{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm">Deletar</button>

                      <a href="{{route('cursos.edit',$curso->id)}}" class="btn btn-info btn-sm">Editar</a>
                    </form>
                    

                  
                </td>
               </tr>
                
    


               @endforeach
               @endif
              </tbody></table>
            </div>
            
        </div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCurso">
  Adicionar novo curso
</button>


<!-- Modal -->
<div class="modal fade" id="addCurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar novo curso</h4>
      </div>
      <div class="modal-body">
        
        <form action="{{ route('cursos.store') }}" method="post" enctype="multipart/form-data">
             {!! csrf_field() !!}

        	
			<div class="form-group">
				<label for="title">Nome do curso</label>
                    <input type="text" name="nome" class="form-control" 
                           placeholder="Insira o nome do curso" required>
      </div>

      <div class="form-group">
        <label for="title">Breve descritivo do curso</label>
                    <input type="text" name="descritivo" class="form-control" 
                           placeholder="Descreva brevemente o curso." required>
      </div>

      <div class="form-group">
                  <label>Tipo</label>
                  <select class="form-control" name="tipo">
                    <option value="chave" selected>CHAVE</option>
                    <option value="aprendizagem">Aprendizagem</option>
                  </select>
      </div>

      <div class="form-group">
        <label for="title">Duração</label>
                    <input type="text" name="duracao" class="form-control" 
                           placeholder="Insira a duração do curso" required>
      </div>

      <div class="form-group">
        <label for="title">Investimento</label>
                    <input type="text" name="investimento" class="form-control" 
                           placeholder="Insira o investimento do curso" required>
      </div>

			<div class="form-group">
				<label for="content">Critérios</label>
				<textarea name="criterios" id="" cols="10" rows="5"></textarea>
			</div>
      
      <div class="form-group">
        <label for="content">Ementa</label>
        <textarea name="ementa" id="" cols="10" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="content">Área de atuação</label>
        <textarea name="area" id="" cols="10" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="content">Processo Seletivo</label>
        <textarea name="processo" id="" cols="10" rows="5"></textarea>
      </div>



      <div class="form-group">
                  <label for="exampleInputFile">Imagem</label>
                  <input type="file" id="exampleInputFile" name="img" required>
                  <p class="help-block">Insira uma imagem do curso.</p>
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Inserir</button>
         </form>
      </div>
    </div>
  </div>
</div>




<script src="../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'criterios' );
        CKEDITOR.replace( 'ementa' );
        CKEDITOR.replace( 'area' );
        CKEDITOR.replace( 'processo' );

    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="http://localhost/cms/public/vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script>

$('#editPost').on('show.bs.modal', function (event) {

 
  var button = $(event.relatedTarget) // Button that triggered the modal
  var title = button.data('title') // Extract info from data-* attributes
  var id = button.data('id')
  var content = button.data('content')

  
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
 
  modal.find('.modal-body #title').val(title)
  modal.find('.modal-body #id').val(id)
    CKEDITOR.replace('editContent')
    CKEDITOR.instances['editContent'].setData(content)
 
 
});

    </script>



@stop