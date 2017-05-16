@extends('layout')

@section('content')
<div id="loaderHolder" style="display: none;">
    <div class="loader"></div>
</div>

<section id="gridContent" class="grid whitebg">
     <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
        <div class="row">
           <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="padding-top: 7%;background: #ded5cc;text-align: center;margin: 0px !important;">
                <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;padding-bottom: 50px;">Eventos</h1>
                <p >
                <p style="font-family: 'AppleGaramondLight';padding-right: 10%;padding-left: 10%;font-size: 2em;"> “Tres décadas, dos generaciones, una historia”</p>
                <p style="font-family: 'AppleGaramondLight';padding-right: 10%;padding-left: 10%;font-size: 1.5em;"> Ese es el lema que resume nuestros primero 30 años, una historia que no estaría completa</p>
                <p style="font-family: 'AppleGaramondLight';padding-right: 10%;padding-left: 10%;font-size: 1.5em;"> sin nuestros grandes amigos y colaboradores.</p>
</p>
             </div>
            </div>
          </div>
        </div>
  </section>
<style>
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
</style>

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
<?php $i=1;?>
@foreach(@$Eventts as $Event)
  @if($i & 1)
  <div class="main-section home-mod m-img-right">
    <div class="column col-xs-12 col-sm-6 col-lg-6">
        <div class="copy-wrapper">
            <div class="hovercontainer hovcont" style="height: 550px;"> 
              <div class="subhover">
                <a href="{{url('evento',array('id'=>$Event->id))}}" style="color: #f9f9f9 !important">{{$Event->description}}</a>
              </div>
            </div>
        </div>
    </div>
    <div class="column col-xs-12 col-sm-6 col-lg-6 no-pad-left no-pad-right">
        <div class="img-wrapper">
          <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
            @if(!empty($Event->Images()->first()->route))
            <a href="{{url('evento',array('id'=>$Event->id))}}"><img class="responsive img-responsive" src="{{$Event->Images()->first()->route}}"></a>@endif
          </div>
        </div>
     </div>
  </div>
  @else
  <div class="main-section home-mod m-img-left">
    <div class="column col-xs-12 col-sm-6 col-lg-6">
        <div class="copy-wrapper">
          <div class="hovercontainer hovcont" style="height: 550px;"> 
              <div class="subhover">
                <a href="{{url('evento',array('id'=>$Event->id))}}" style="color: #f9f9f9 !important">{{$Event->description}}</a>
              </div>
          </div>
        </div>
    </div>
    <div class="column col-xs-12 col-sm-6 col-lg-6 no-pad-left no-pad-right">
        <div class="img-wrapper">
          <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
            @if(!empty($Event->Images()->first()->route))
            <a href="{{url('evento',array('id'=>$Event->id))}}"><img class="responsive img-responsive" src="{{$Event->Images()->first()->route}}"></a>@endif
          </div>
        </div>
     </div>
  </div>
  @endif
  <?php $i++; ?>
@endforeach
</div>
</section>


@endsection