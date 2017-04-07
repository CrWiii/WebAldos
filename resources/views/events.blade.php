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

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
              <p class="hovcontp" style="padding: 31.5% 30%;"><a href="{{url('evento')}}" style="color: #f9f9f9 !important">EVENTO 1</a></p>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('evento')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>
           </div>
          </div>
        </div>

        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('evento')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>
              <!--<img src="file/">-->
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <p class="hovcontp" style="padding: 31.5% 30%;"><a href="{{url('evento')}}" style="color: #f9f9f9 !important">EVENTO 2</a></p>
           </div>
          </div>
        </div>

      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
              <p class="hovcontp" style="padding: 31.5% 30%;"><a href="{{url('evento')}}" style="color: #f9f9f9 !important">EVENTO 3</a> </p>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('evento')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>
           </div>
          </div>
      </div>
        
    </div>
</section>
@endsection