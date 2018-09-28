<header>
        


        @php 

                $files = File::allFiles(public_path('uploads/banners'));
                $i=0;
            
        @endphp


        <div class="carousel slide hidden-xs hidden-sm" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            
            
            @foreach($files as $key => $file)
            
            <div class="item <?php if ($key <=0) { echo 'active'; } ?>">
                <img src="uploads/banners/{{$file->getFilename()}}" alt="Slide Image" class="img-responsive" />
            </div>
            @endforeach
        
    <div>
        <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
    </div>

            <ol class="carousel-indicators">
                @foreach($files as $key => $file)
                <li data-target="#carousel-1" data-slide-to="{{$key}}" class="<?php if ($key <=0) { echo 'active'; } ?>"></li>
                @endforeach
                
            </ol>

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
    </header>

