@extends('layout')

@section('content')

<section id="weddingPlanner" class="main-content jumbotron">
       <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">  
             <div class="carousel-inner">
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
<style>
    .subhover{
    color: white;
    font-family: 'Trajan Pro';
    font-size: 3em;margin-left: auto;
    margin-right: auto;x
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }

  .img-responsivec{
    max-width: 100%;
    height: 600px;
  }

  .main-section{
    width: 100%;
    clear: both;
    float: left;
  }

  .home-mod.m-img-right .column:first-child {
    float: left;
  }

  .home-mod.m-img-right .column {
    float: right;
  }

  .home-mod.m-img-right .copy-wrapper {
    float: right;
    max-width: 800px;
  }
  @media (max-width: 1400px){
    .home-mod .copy-wrapper {
      padding: 60px;
    }
  }
  .home-mod .copy-wrapper {
    float: none;
    text-align: center;
    padding: 50px 10px 0px 10px;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
  }
  .home-mod.m-img-right .column {
    float: right;
  }
  .home-mod .no-pad-left {
    padding-left: 0;
  }
  .home-mod .no-pad-right {
    padding-right: 0;
  }

  .home-mod.m-img-right .img-wrapper {
    float: right;
  }

  .home-mod .img-wrapper {
    float: left;
    width: 100%;
  }

  .home-mod.m-img-left .column:first-child {
    float: right;
  }
  .home-mod.m-img-left .column {
    float: left;
  }
  .home-mod.m-img-left .copy-wrapper {
    float: left;
    max-width: 800px;
  }
  @media (max-width: 1400px){
    .home-mod .copy-wrapper {
      padding: 60px;
    }
  }
  .home-mod .copy-wrapper {
    float: none;
    text-align: center;
    padding: 50px 10px 0px 10px;
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
  }
  .home-mod.m-img-left .column {
    float: left;
  }
  .home-mod .no-pad-left {
    padding-left: 0;
  }
  .home-mod .no-pad-right {
    padding-right: 0;
  }
  img {
    max-width: 100%;
}
img {
    vertical-align: middle;
}

img {
    border: 0;
}
  .main-section{
        background: #ded5cc;
  }
</style>

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
<section id="gridContent" class="grid whitebg">
<?php $i=1;?>
@foreach(@$frames as $frame)
  @if($i & 1)
  <div class="main-section home-mod m-img-right">
    <div class="column col-xs-12 col-sm-6 col-lg-6">
        <div class="copy-wrapper">
            <div class="hovercontainer hovcont"> 
              <p class="hovcontp">{{$frame->title}}</p>
              <p class="hovcontps">{{$frame->content}} </p>
              <h1 class="hovconth">{{$frame->subtitle}}</h1>
              <p class="hovcontpl"><a href="{{url($frame->route)}}">Ver la colección completa</a></p>
            </div>
        </div>
    </div>
    <div class="column col-xs-12 col-sm-6 col-lg-6 no-pad-left no-pad-right">
        <div class="img-wrapper">
          <a href="{{url($frame->route)}}"><img src="{{$frame->Images->route}}"></a>
        </div>
     </div>
  </div>
  @else
  <div class="main-section home-mod m-img-left">
    <div class="column col-xs-12 col-sm-6 col-lg-6">
        <div class="copy-wrapper">
          <div class="hovercontainer hovcont"> 
            <p class="hovcontp">{{$frame->title}}</p>
            <p class="hovcontps">{{$frame->content}} </p>
            <h1 class="hovconth">{{$frame->subtitle}}</h1>
            <p class="hovcontpl"><a href="{{url($frame->route)}}">Ver la colección completa</a></p>
          </div>
        </div>
    </div>
    <div class="column col-xs-12 col-sm-6 col-lg-6 no-pad-left no-pad-right">
        <div class="img-wrapper">
          <a href="{{url($frame->route)}}"><img src="{{$frame->Images->route}}"></a>
        </div>
     </div>
  </div>
  @endif
  <?php $i++; ?>
@endforeach
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
