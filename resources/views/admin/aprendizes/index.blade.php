@extends('adminlte::page')


@section('title', 'Aprendizes')

@section('content_header')
    <h1>Aprendizes</h1>
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
                  <th>Nome</th>
                  <th>Data Nasc.</th>
                  <th>Telefone</th>
                  <th>Curso</th>
                  <th>Data Inscrição</th>
                  
                </tr>
                

                @if(count($aprendizes))
                @foreach($aprendizes as $aprendiz)


              <tr>
               	<td>{{$aprendiz->id}}</td>
               	<td>{{$aprendiz->nome}}</td>
               	<td>{{date('d/m/Y', strtotime($aprendiz->dataNasc))}}</td>
               	<td>{{$aprendiz->telefone}}</td>
               	<td>{{$aprendiz->curso->nome}}</td>
                <td>{{date('d/m/Y', strtotime($aprendiz->created_at))}}</td>
               	
               </tr>
                
    


               @endforeach
               @endif
              </tbody></table>
            </div>
            
        </div>












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