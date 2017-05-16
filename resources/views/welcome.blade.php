@extends('layout')

@section('content')

<section id="weddingPlanner" class="main-content jumbotron">
       <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">  
             <div class="carousel-inner">
             
              <!-- <div class="item active">
                <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Phuket">
                        
              <img src="{{url('img/Inicio.png')}}"></figure>
                        <div class="carousel-caption">
                            <div class="caption-content">
                                <h1 class="os-animation animated fadeInDown tit1" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">CELEBRA EL MOMENTO</h1>
                              <h2 class="os-animation animated fadeInDown tit2" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">LIMA . CUSCO . PUNO</h2>
                            </div>
                        </div>
              </div> -->
              <?php $i=0 ?> 
              @foreach($slides as $slide)
                @if($i==0) <div class="item active"> @else <div class="item"> @endif
                    <figure class="responsive img-responsive" data-media240="{{url($slide->Images->route)}}" data-media769="{{url($slide->Images->route)}}" data-media1201="{{url($slide->Images->route)}}" data-title="Bridal Planner">
                        <img src="{{url('img/Inicio.png')}}"></figure>
                        <div class="carousel-caption">
                            <div class="caption-content">
                                <h1 class="os-animation animated fadeInDown tit1" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">{{$slide->title}}</h1>
                              <h2 class="os-animation animated fadeInDown tit2" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">{{$slide->subtitle}}</h2>
                            </div>
                        </div>
                </div>
                <?php $i++ ?>
                @endforeach
            </div>
            <ol class="carousel-indicators">
                @if(!empty($slides))
                <?php $i=0 ?>
                  @foreach($slides as $slide)
                    <li data-target="#mainCarousel" data-slide-to="{{$i}}" class=""></li>
                    <?php $i++ ?>
                  @endforeach
                @endif
            </ol>
            <a class="left carousel-control" style="display: block !important" href="#mainCarousel" role="button" data-slide="prev"><span class="icon-chevron-thin-left"></span></a>
            <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next"><span class="icon-chevron-thin-right"></span></a>
      </div>
</section>

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">

       <style type="text/css">
  .subhover{
    color: white;
    font-family: 'Trajan Pro';
    font-size: 3em;margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }

  .img-responsivec{
    max-width: 100%;
    height: 600px;
  }
  
</style>

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
    <?php $i=1;?>
      @foreach(@$frames as $frame)
        @if($i & 1)
          <div class="row" style="background: #ded5cc !important">
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 600px;"> 
                  <p class="hovcontp">{{$frame->title}}</p>
                    <p class="hovcontps">{{$frame->content}} </p>
                    <h1 class="hovconth">{{$frame->subtitle}}</h1>
                    <p class="hovcontpl"><a href="{{url($frame->route)}}">Ver la colección completa</a></p>
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
                  <a href="{{url($frame->route)}}"><img class="responsive img-responsivec" src="{{$frame->Images->route}}"></a>
               </div>
              </div>
          </div>
        @else
          <div class="row" style="background: #ded5cc !important">
            <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
                <a href="{{url($frame->route)}}"><img class="responsive img-responsivec" src="{{$frame->Images->route}}"></a>
              </div>
            </div>
            <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 600px;"> 
                    <p class="hovcontp">{{$frame->title}}</p>
                    <p class="hovcontps">{{$frame->content}} </p>
                    <h1 class="hovconth">{{$frame->subtitle}}</h1>
                    <p class="hovcontpl"><a href="{{url($frame->route)}} ">Ver la colección completa</a></p>
                </div>
              </div>
          </div>
          
        @endif
      <?php $i++; ?>
      @endforeach
      
    </div>
</section>
        

</section>

<section id="raveContent" class="padded-content-sm os-animation animated fadeInUpBig" data-os-animation="fadeInUpBig" data-os-animation-delay="100ms" style="animation-delay: 100ms; background: #d6c6bb !important;padding: 0px !important;">
    <div class="container text-center">
      <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;">
            <div class="hovercontainer">
              <figure class="responsive img-responsive" data-media240="{{url('video/imagen.jpg')}}" data-media961="{{url('video/imagen.jpg')}}" alt=""><img src="{{url('video/imagen.jpg')}}" style="width: 100%;"></figure>
                <div class="action-container">
                  <img class="vidloader" src="{{url('video/ring.svg')}}" alt="Video Loading">
                    <button class="action action--hidden action--play">
                      <span class="action__label icon-controller-play"></span>
                    </button>
               </div>
           </div>
         </div>
    <!--<p style="margin: 200px;">VIDEO</p>-->
    </div>
</section>

<div class="video-wrap">
   <div class="video-inner">
       <video class="video-player" controls="controls" preload="auto">
       <source src="{{url('video/video.m4v')}}" type="video/mp4">
       <source src="{{url('video/video.webm')}}" type="video/webm">
       <source src="{{url('video/video.ogv')}}" type="video/ogg">
       </video>
       <button class="action action--close">
           <span class="action__label icon-cross"></span>
       </button>
   </div>
</div>

@endsection
