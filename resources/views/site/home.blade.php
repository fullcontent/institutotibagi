@include('site.partials.header')
@include('site.partials.banner')


 <section>
        <div class="container">
            <div class="col-md-7">
                <div class="video">
                    <h2>Bem vindos ao instituto tibagi</h2>
                    <iframe width="640" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/Urb6HQUonC8?controls=0&amp;showinfo=0&amp;rel=0"></iframe>
                </div>
               
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
        <div class="container">
            <h1 class="text-center title">Nossos parceiros</h1>
            
<script language="javascript">
    
$(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 8,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                    pauseOnHover: false,
                    responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });

</script>

            



            @php 

                $files = File::allFiles(public_path('uploads/parceiros'));
            
            @endphp


            <div class="customer-logos">
            @foreach ($files as $file)

            <div class="slide">
            
                    <a href="" class="thumbnail" style="border: none;">
                    <img src="uploads/parceiros/{{$file->getFilename()}}" class="img-responsive" style="max-height: 70px; width: auto;">
                    </a>
                    
                
                
            </div>
            @endforeach


        </div>
    </section>
    
@include('site.partials.doe')

   @include('site.partials.footer')
