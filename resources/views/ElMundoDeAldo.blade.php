@extends('layout')

@section('content')

<section id="gridContent" class="grid whitebg">
  <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
    <div class="row">
      <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
        <div class="hovercontainer" style="padding-top: 7%;background: #ded5cc;text-align: center;margin: 0px !important;padding-bottom: 5em;">
          <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;">El mundo de Aldo</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="loaderHolder" style="display: none;">
  <div class="loader"></div>
</div>
<style>

  @media(max-width: 860px){
    .hovcontpl{
      font-size: 0.3em !important;
    }
    .sdfg{
      font-size: 0.7em !important;
    }
  }

  @media(max-width: 1060px){
    .hovcontpl{
      font-size: 0.4em !important;
    }
    .sdfg{
      font-size: 0.8em;
    }
  }
  @media(max-width: 767px){
    h1{
      margin-top: 60px !important;
      font-size: 4em !important;
    }
    .hovcontpl{
      color: #676767;
      font-size: 0.3em !important;
    }
    .sdfg{
      font-size: 0.6em;
    }
  }
    .subhover{
    color: white;
    font-family: 'Trajan Pro';
    font-size: 3em;margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 50%;
    /*transform: translateY(-50%);*/
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

  .hovcontpl{
    color: #676767 !important;
    font-size: 0.5em;
  }


</style>

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">

<?php $i=1;?>
@foreach($frames as $frame)
  @if($i & 1)
  <div class="main-section home-mod m-img-right">
    <div class="column col-xs-12 col-sm-6 col-lg-6">
        <div class="copy-wrapper">
            <div class="subhover">
              @if(substr( $frame->route, 0, 4 ) === "http")
                <a href="{{url($frame->route)}}" target="_blank" style="color: #f9f9f9 !important"><p class="sdfg">{{$frame->title}}</p></a>
              @else
                <a href="{{url($frame->route)}}" style="color: #f9f9f9 !important"><p class="sdfg">{{$frame->title}}</p></a>
              @endif
              <p class="hovcontpl"> {{$frame->subtitle}}</p>
            </div>
        </div>
    </div>
    <div class="column col-xs-12 col-sm-6 col-lg-6 no-pad-left no-pad-right">
        <div class="img-wrapper">
          @if(!empty($frame->Images->route))
            <center><a href="{{url($frame->route)}}"><img class="responsive img-responsive" src="{{$frame->Images->route}}"></a></center>
          @endif
        </div>
     </div>
  </div>
  @else
  <div class="main-section home-mod m-img-left">
    <div class="column col-xs-12 col-sm-6 col-lg-6">
        <div class="copy-wrapper">
          <div class="subhover">
            @if(substr( $frame->route, 0, 4 ) === "http")
              <a href="{{url($frame->route)}}" target="_blank" style="color: #f9f9f9 !important"><p class="sdfg">{{$frame->title}}</p></a>
            @else
              <a href="{{url($frame->route)}}" style="color: #f9f9f9 !important"><p class="sdfg">{{$frame->title}}</p></a>
            @endif
            <p class="hovcontpl"> {{$frame->subtitle}}</p>
          </div>
        </div>
    </div>
    <div class="column col-xs-12 col-sm-6 col-lg-6 no-pad-left no-pad-right">
        <div class="img-wrapper">
          @if(!empty($frame->Images->route))<center><a href="{{url($frame->route)}}"><img class="responsive img-responsive" src="{{$frame->Images->route}}"></a></center>@endif
        </div>
     </div>
  </div>
  @endif
  <?php $i++; ?>
@endforeach
</section>
@endsection