@extends('layout')

@section('content')


<style type="text/css">
  .asf > li > a {color: #676767 !important;font-size: 1em;line-height: 50px;}
  
  .nav > li > a.active {margin-bottom:-3px;border-bottom: 2px solid #ded5cc !important;}
  .asf{border-bottom: 1px solid #a89797 !important;}

  .grid .row .hovercontainer figure img {
    width: 100% !important;
  }

</style>
<div id="loaderHolder" style="display: none;">
    <div class="loader"></div>
</div>

<section id="gridContent" class="grid whitebg">
     <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
        <div class="row">
           <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="padding-top: 7%;background: #ded5cc;text-align: center;margin: 0px !important;">
                <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;padding-bottom: 50px;">El mundo de Aldo</h1>
             </div>
            </div>
          </div>
        </div>
  </section>

<section id="gridContent" class="grid whitebg" style="text-align: center;background: #ded5cc;">
  <div class="container">
        <div class="row">
            <ul class="nav asf">
                <li><a id="Historia" class="active" href="">Historia</a></li>
                <li><a id="Nosotros" href="">Nosotros</a></li>
                <li><a id="CreandoMagia" href="">Creando Magia</a></li>
                <li><a id="ResponsabilidadSocial" href="">Responsabilidad Social</a></li>
            </ul>
        </div>
  </div>
</section>

<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
      <div class="row" style="background: #ded5cc !important">
      <div class="os-animation col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
         <div class="os-animation col-xs-10 col-sm-10 col-md-10 col-lg-10 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p style="padding: 2% 2%;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself</p>
              
              
                <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">  
                       <div class="carousel-inner">
                       
                                       <div class="item">
                              <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Phuket">
                                  
                                  <img src="{{url('img/Inicio.png')}}"></figure>
                                  <p style="padding: 2% 2%;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                          </div>
                                          <div class="item">
                              <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Services in Phuket">
                                  
                                  <img src="{{url('img/Inicio.png')}}"></figure>
                                  <p style="padding: 2% 2%;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                          </div>
                                          <div class="item">
                              <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Services Thailand Phuket">
                                  
                                  <img src="file/Inicio.png"></figure>
                                  <p style="padding: 2% 2%;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                          </div>
                                          <div class="item active">
                              <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner">
                                  <img src="{{url('img/Inicio.png')}}"></figure>
                                  <p style="padding: 2% 2%;">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                          </div>
                      </div>
                      <!-- <ol class="carousel-indicators">   
                        <li data-target="#mainCarousel" data-slide-to="0" class="">1</li>
                        <li data-target="#mainCarousel" data-slide-to="1" class="">2</li>
                        <li data-target="#mainCarousel" data-slide-to="2" class="">3</li>
                        <li data-target="#mainCarousel" data-slide-to="3" class="active">4</li>
                      </ol> -->
                      <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev"><span class="icon-chevron-thin-left"></span></a>
                      <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next"><span class="icon-chevron-thin-right"></span></a>
                </div>
              


              
           </div>
          </div>
          <div class="os-animation col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        </div>
    </div>
</section>

@endsection