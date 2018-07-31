@extends('adminlte::page')


@section('title', 'Noticias')

@section('content_header')
    <h1>Notícias</h1>
@stop

@section('content')
    
    <div class="col-md-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Título</th>
                  <th>Conteúdo</th>
                  <th>Postado por</th>
                  <th>Data da notícia</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
                @if(count($noticias))
               @foreach($noticias as $noticia)

<div class="modal fade" id="viewNoticia{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
	<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$noticia->title}}</h4>
      </div>
	<div class="modal-body">
	{!! $noticia->content !!}
	@foreach($noticia->images as $img)
		<img src="{{asset($img->filename)}}" alt="" class="img-responsive">
	@endforeach
	
	</div>
	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </form>
      </div>
</div>
</div>
</div>

<div class="modal fade" id="editPost" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Notícia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
         <form action="{{route('noticias.edit',$noticia->id)}}" method="put">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ID:</label>
            <input type="number" class="form-control" id="id" name="id" disabled>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Título:</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Conteúdo:</label>
            <textarea name="editContent" id="editContent" cols="30" rows="10"></textarea>
          </div>

          <div class="form-group">
          
          
          </div>
          
                


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
      </div>
    </div>
  </div>
</div>
               <tr>
               	<td>{{$noticia->id}}</td>
               	<td>{{$noticia->title}}</td>
               	<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewNoticia{{$noticia->id}}">
  Ver
</button></td>
               	<td>{{$noticia->user->name}}</td>
               	<td>{{$noticia->created_at}}</td>
               	<td>{{$noticia->status}}</td>
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
  Adicionar nova notícia
</button>


<!-- Modal -->
<div class="modal fade" id="addNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar nova notícia</h4>
      </div>
      <div class="modal-body">
        
        <form action="{{ route('noticias.store') }}" method="post" enctype="multipart/form-data">
             {!! csrf_field() !!}

        	
			<div class="form-group">
				<label for="title">Título</label>
                    <input type="text" name="title" class="form-control" 
                           placeholder="Insira o título da notícia" required>
                                        
            </div>
			
			<div class="form-group">
				<label for="content">Conteudo</label>
				<textarea name="content" id="" cols="30" rows="10"></textarea>

			</div>
            

            <div class="form-group">
                  <label for="exampleInputFile">Imagem</label>
                  <input type="file" id="exampleInputFile" name="img">
                  <p class="help-block">Example block-level help text here.</p>
                </div>

            <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="publicado" selected>Publicado</option>
                    <option value="nao publicado">Não publicado</option>
                    <option value="revisar">Revisar</option>
                  </select>
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