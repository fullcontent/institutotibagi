@extends('adminlte::page')


@section('title', 'Noticias')

@section('content_header')
    <h1>Parceiros</h1>
@stop

@section('content')
    
    <div class="col-md-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Parceiro</th>
                  <th>Logo</th>
                  <th>Site</th>
                  <th>Ações</th>
                </tr>
                @if(count($noticias))
               @foreach($noticias as $noticia)


               <tr>
               	<td>{{$noticia->id}}</td>
               	<td>{{$noticia->title}}</td>
                <td></td>
               	<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewNoticia{{$noticia->id}}">
  Ver
</button></td>
               
               	<td><form action="{{ route('noticias.destroy' , $noticia->id)}}" method="POST">
                      <input type="hidden" name="_method" value="DELETE" />{{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editPost" data-title="{{$noticia->title}}" data-content="{{$noticia->content}}" data-status="{{$noticia->status}}" data-id="{{$noticia->id}}">
  Editar</button>
                    </form>
                    
                </td>
               </tr>

               @endforeach
               @endif
              </tbody></table>
            </div>
            
        </div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNoticia">
  Adicionar novo parceiro
</button>


<!-- Modal -->
<div class="modal fade" id="addNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar novo parceiro</h4>
      </div>
      <div class="modal-body">
        
        <form action="{{ route('parceiros.store') }}" method="post" enctype="multipart/form-data">
             {!! csrf_field() !!}

        	
			<div class="form-group">
				<label for="title">Parceiro</label>
                    <input type="text" name="title" class="form-control" 
                           placeholder="Insira o nome do parceiro" required>
                                        
            </div>
			
			<div class="form-group">
				<label for="content">Site</label>
				<input type="text" name="site" class="form-control" 
                           placeholder="Insira o título da notícia" required>

			</div>
            

            <div class="form-group">
                  <label for="exampleInputFile">Logo</label>
                  <input type="file" id="exampleInputFile" name="img">
                  <p class="help-block">Example block-level help text here.</p>
                </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Publicar</button>
         </form>
      </div>
    </div>
  </div>
</div>




<script src="../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
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