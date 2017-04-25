@extends('layout')

@section('content')
<style type="text/css">
  .subhover{
    font-family: 'Trajan Pro';
    font-size: 3em;margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    line-height: 1; 
  }
  
</style>
<div id="loaderHolder" style="display: none;">
  <div class="loader"></div>
</div>
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
<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
    <?php $i=2;?>
      @foreach($frames as $frame)
      @if($frame->state==1)
        @if($i%2==0)
          <div class="row" style="background: #ded5cc !important">
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 550px;"> 
                  <div class="subhover">
                    <a href="{{url($frame->route)}}" style="color: #f9f9f9 !important">{{$frame->title}}</a>
                    <p style="font-family: 'AppleGaramondLight';font-size: 0.6em;"> {{$frame->subtitle}}</p>
                  </div>
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
                  @if(!empty($frame->Images->route))
                  <center><a href="{{url($frame->route)}}"><img class="responsive img-responsive" src="{{$frame->Images->route}}"></a></center>@endif
               </div>
              </div>
          </div>
        @else
          <div class="row" style="background: #ded5cc !important">
            <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
                  @if(!empty($frame->Images->route))<center><a href="{{url($frame->route)}}"><img class="responsive img-responsive" src="{{$frame->Images->route}}"></a></center>@endif
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 550px;"> 
                  <div class="subhover">
                    <a href="{{url($frame->route)}}" style="color: #f9f9f9 !important">{{$frame->title}}</a>
                    <p style="font-family: 'AppleGaramondLight';font-size: 0.6em;"> {{$frame->subtitle}}</p>
                  </div>
               </div>
              </div>
            </div>
          </div>
        @endif
      @endif
      <?php $i++; ?>
      @endforeach
    </div>
</section>

<!-- 
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
<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
            <div style="padding: 30% 25%">
              <a href="{{url('ElMundoDeAldoSub/Historia')}}"><p style="color: #f9f9f9 !important;font-family: 'Trajan Pro';font-size: 3.5em;">HISTORIA</p></a>
              <p style="font-family: 'AppleGaramondLight';font-size: 140%;"> Tres décadas, dos generaciones, una historia...</p>
            </div>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('ElMundoDeAldoSub/Historia')}}"><p style="padding: 44.6%;">IMAGEN</p></a>

           </div>
          </div>
        </div>

        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('ElMundoDeAldoSub/Nosotros')}}"><p style="padding: 44.6% 35%;">IMAGEN</p></a>

           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <div style="padding: 30% 25%">
                <a href="{{url('ElMundoDeAldoSub/Nosotros')}}"><p style="color: #f9f9f9 !important;font-family: 'Trajan Pro';font-size: 3.5em;">NOSOTROS</p></a>
                <p style="font-family: 'AppleGaramondLight';font-size: 140%;">Tres décadas, dos generaciones, una historia...</p>
              </div>
           </div>
          </div>
        </div>
        <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
            <div style="padding: 30% 25%">
                <a href="{{url('ElMundoDeAldoSub/creando_magia')}}"><p style="color: #f9f9f9 !important;font-family: 'Trajan Pro';font-size: 3.5em;">CREANDO MAGIA</p></a>
                <p style="font-family: 'AppleGaramondLight';font-size: 140%;">El nacimiento de una joya...</p>
              </div>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('ElMundoDeAldoSub/creando_magia')}}"><p style="padding: 46.7% 35%;">IMAGEN</p></a>

           </div>
          </div>       
        </div>
        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('ElMundoDeAldoSub/responsabilidad_social')}}"><p style="padding: 46.6% 35%;">IMAGEN</p></a>
           </div>
          </div>
           <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
            <div style="padding: 30% 5%">
                <a href="{{url('ElMundoDeAldoSub/responsabilidad_social')}}"><p style="color: #f9f9f9 !important;font-family: 'Trajan Pro';font-size: 3.5em;">RESPONSABILIDAD SOCIAL</p></a>
                <p style="font-family: 'AppleGaramondLight';font-size: 140%;">Detalles que ayudan...</p>
            </div>
           </div>
          </div>
        </div>
        

    </div>
</section> -->
@endsection