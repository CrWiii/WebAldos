@extends('layout')

@section('content')


<style type="text/css">
  .asf > li > a {color: #676767 !important;font-size: 1em;line-height: 50px;}
  
  .nav > li > a.active {margin-bottom:-3px;border-bottom: 2px solid #ded5cc !important;}
  .asf{border-bottom: 1px solid #a89797 !important;}

  .grid .row .hovercontainer figure img {
    width: 80% !important;
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


<section id="gridContent" class="grid whitebg" style="background: #ded5cc;" data-id="Historia">
  <div class="container-fluid">
      <div class="row">

        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
            <!--<a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
            <p style="text-align: center">Producto</p>-->
          </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <!--<a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
           </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
          </div>
        </div> 

    </div>
  </div>
</section>

<section id="gridContent" class="grid whitebg" style="background: #ded5cc;" data-id="Nosotros">
  <div class="container-fluid">
      <!--<div class="row">
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
            <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
            <p style="text-align: center">Producto</p>
          </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
           </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
          </div>
        </div> 
    </div>-->
  </div>
</section>

<section id="gridContent" class="grid whitebg" style="background: #ded5cc;" data-id="CreandoMagia">
  <div class="container-fluid">
      <!--<div class="row">
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
            <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
            <p style="text-align: center">Producto</p>
          </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
           </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
          </div>
        </div> 
    </div>-->
  </div>
</section>

<section id="gridContent" class="grid whitebg" style="background: #ded5cc;" data-id="ResponsabilidadSocial">
  <div class="container-fluid">
      <!--<div class="row">
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
            <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
            <p style="text-align: center">Producto</p>
          </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
           </div>
        </div>
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
             <a href="{{url('producto')}}"><figure class="responsive img-responsive" data-media240="/img/anillo01.png" data-media961="/img/anillo01.png" alt="Krystle &amp; Coby"></figure></a>
             <p style="text-align: center">Producto</p>
          </div>
        </div> 
    </div>-->
  </div>
</section>
@endsection