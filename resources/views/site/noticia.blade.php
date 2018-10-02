@include('site.partials.header')


<section id="quemsomos">
     <div class="container-fluid quemsomos" style="background-image:url({{asset("assets/img/")}}/BannerNoticias.png);">
        <h1 class="quemsomos">Informe-se!</h1>
    </div>
    <div class="container-fluid lines">
        <div class="row lines">
            <div class="col-md-4 col-xs-4 lines">
                <div class="line red"></div>
            </div>
            <div class="col-md-4 col-xs-4 lines">
                <div class="line yellow"></div>
            </div>
            <div class="col-md-4 col-xs-4 lines">
                <div class="line blue"></div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    
    <div class="col-lg-7 col-md-7">
        
        
 <h1>{{$noticia->title}}</h1>

        <article class="noticia">


    

           
        	
        	
        @if (count($noticia->images) === 1)
            @foreach($noticia->images as $i)
            <div class="col-md-12 no-padding" style="height: 200px; overflow: hidden;">
                <img src="{{asset($i->filename)}}" alt="" class="img-responsive">
            </div>
           
            @endforeach

            {!! $noticia->content !!}
   
        

        
        @elseif (count($noticia->images) > 1)
             @foreach($noticia->images as $i)
            <div class="col-md-4">
                <img src="{{asset($i->filename)}}" alt="" class="img-responsive">
            </div>
            @endforeach
        @else
           {!! $noticia->content !!}
        @endif


        </article>

       
    </div>
   <div class="col-lg-4 col-lg-offset-1 col-md-5 col-sm-12 col-xs-12">
        <h1 class="title-box">Últimas notícias</h1>
        @foreach($noticias as $noticia)
                <div class="noticia">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="{{route('noticia', ['id'=>$noticia->id, 'slug'=>str_slug($noticia->title)])}}" class="link">{{$noticia->title}}</a>
                        
                    </div>
                </div>
        @endforeach
    </div>
</div>


@include('site.partials.doe')
@include('site.partials.footer')