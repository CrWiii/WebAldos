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
                <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;padding-bottom: 50px;">Novios</h1>
             </div>
            </div>
          </div>
        </div>
  </section>

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
  
</style>
<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
    <?php $i=2;?>
      @foreach(@$TypesNovios as $frame)
        @if($i%2==0)
          <div class="row" style="background: #ded5cc !important">
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 550px;"> 
                  <div class="subhover">
                    <a href="{{url('Novios',array('Type'=>$frame->slug))}}" style="color: #f9f9f9 !important">{{$frame->description}}</a>
                  </div>
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
                  <a href="{{url('Novios',array('Type'=>$frame->slug))}}"><img class="responsive img-responsive" src="{{$frame->Images_frame->route}}"></a>
               </div>
              </div>
          </div>
        @else
          <div class="row" style="background: #ded5cc !important">
            <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
                  <a href="{{url('Novios',array('Type'=>$frame->slug))}}"><img class="responsive img-responsive" src="{{$frame->Images_frame->route}}"></a>
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 550px;"> 
                  <div class="subhover">
                    <a href="{{url('Novios',array('Type'=>$frame->slug))}}" style="color: #f9f9f9 !important">{{$frame->description}}</a>
                  </div>
               </div>
              </div>
            </div>
          </div>
        @endif
      <?php $i++; ?>
      @endforeach
    </div>
</section>

<!-- <section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
            <div style="padding: 20.5% 15%;line-height:0;">
              <p style="color: white;font-family: 'Trajan Pro';font-size: 3.5em;"><a href="{{url('Novios/anillos_de_compromiso')}}" style="color: #f9f9f9 !important;line-height:1;">ANILLOS DE COMPROMISO</a></p>
              <p style="font-family: 'AppleGaramondLight';font-size: 140%;line-height:2;"> Como para toda la vida, Aldo&Co. diseña cada uno de sus anillos como una pieza única, con la delicadeza y el detalle que merece aquello que va a durar por siempre. Nuestra promesa es hacer que su compromiso vaya más allá del tiempo.</p>
            </div>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('Novios/anillos_de_compromiso')}}"><p style="padding: 40% 35%;">IMAGEN</p></a>
           </div>
          </div>
        </div>

        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('Novios/aros_de_matrimonio')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>

           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <div style="padding: 20.5% 15%;line-height:0;">
                <p style="color: white;font-family: 'Trajan Pro';font-size: 3.5em;"><a href="{{url('Novios/aros_de_matrimonio')}}" style="color: #f9f9f9 !important;line-height:1;">AROS DE MATRIMONIO</a></p>
                <p style="font-family: 'AppleGaramondLight';font-size: 140%;line-height:2;">En Aldo&Co. forjamos las alianzas que durarán por siempre para aquellos que se prometen amor y respeto.</p>
              </div>
           </div>
          </div>
        </div>

      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
              <div style="padding: 30% 15%;line-height:1;">
                <p style="color: white;font-family: 'Trajan Pro';font-size: 3.5em;"><a href="{{url('Novios/mas_alla_de_las_4cs')}}" style="color: #f9f9f9 !important;line-height:1;">MÁS ALLÁ DE LAS 4CS</a></p>
              </div>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('Novios/mas_alla_de_las_4cs')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>
           </div>
          </div>
      </div>

        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('Novios/colectivo_de_novios')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>

           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <div style="padding: 30% 15%;line-height:1;">
                <p style="color: white;font-family: 'Trajan Pro';font-size: 3.5em;"><a href="{{url('Novios/colectivo_de_novios')}}" style="color: #f9f9f9 !important;line-height:1;">COLECTIVO DE NOVIOS</a></p>
              </div>
           </div>
          </div>
        </div>

      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
              <div style="padding: 30% 15%;line-height:1;">
                <p style="color: white;font-family: 'Trajan Pro';font-size: 3.5em;">
                <a href="{{url('Novios/preguntas_frecuentes')}}" style="color: #f9f9f9 !important;line-height:1;">PREGUNTAS FRECUENTES</a></p>
              </div>
              
           </div>
           
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('Novios/preguntas_frecuentes')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>
           </div>
          </div>
      </div>
    </div>
</section> -->
@endsection