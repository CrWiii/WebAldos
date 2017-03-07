<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title> Aldo & Co.</title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script async="" src="{{url('js/analytics.js')}}"></script>
<script src="{{url('js/modernizr-2.8.3.min.js')}}"></script>
<link href="{{url('css/css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('css/application.css')}}">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<script>(function(){var p,l,r=window.devicePixelRatio;if(navigator.platform==="iPad"){p=r===2?"/fav/startup/startup-tablet-portrait-retina.png":"/fav/startup/startup-tablet-portrait.png";l=r===2?"/fav/startup/startup-tablet-landscape-retina.png":"/fav/startup/startup-tablet-landscape.png";document.write('<link rel="apple-touch-startup-image" href="'+l+'" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="'+p+'" media="screen and (orientation: portrait)"/>');}else{p=r===2?"/fav/startup/startup-retina.png":"/fav/startup/startup.png";document.write('<link rel="apple-touch-startup-image" href="'+p+'"/>');}})()</script><link rel="apple-touch-startup-image" href="http://thebridalplanner.co/fav/startup/startup.png">
<!-- Prevents links from opening in mobile Safari -->
<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
</head>
<style type="text/css">
@media (max-width: 1024px) {
  .navbar-right {
    margin-right: 15px;
  }
  .imagesty{
    padding-right: 10%;
    padding-top: 25%;
  }
}

  figure.effect-chico img {
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(1.12);
  transform: scale(1.12);
}

figure.effect-chico:hover img {
  opacity: 0.5;
             -webkit-transform: scale(1);
  transform: scale(1);
}

figure.effect-chico figcaption {
  padding: 3em;
}

figure.effect-chico figcaption::before {
  position: absolute;
  top: 30px;
  right: 30px;
  bottom: 30px;
  left: 30px;
  border: 1px solid #fff;
  content: '';
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

figure.effect-chico figcaption::before,
figure.effect-chico p {
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
}

figure.effect-chico h2 {
  padding: 20% 0 20px 0;
}

figure.effect-chico p {
  margin: 0 auto;
  max-width: 200px;
  -webkit-transform: scale(1.5);
  transform: scale(1.5);
}

figure.effect-chico:hover figcaption::before,
figure.effect-chico:hover p {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}

@media screen and (max-width: 50em) {
  .grid figure {
    display: inline-block;
    float: none;
    margin: 10px auto;
    width: 100%;
  }
}



.titu1{margin: 0px !important;font-size: 1em !important;color: #917c56;}
.subtit1{margin: 0px !important;font-size: 0.8em !important;color: #a49273;}
.hovcont{
  background: #ded5cc;
  text-align: center;
  margin: 0px !important;
  } 
.hovcontp{
  color: white;
  font-family: 'Trajan Pro';
  padding-top: 10%;
  font-size: 3em;
}
.hovcontps{
  font-family: 'AppleGaramondLight';
  font-size: 1.3em;
  padding-left: 15%;
  padding-right: 15%;
  margin-bottom: 0px;
}
.hovconth{
  font-family: 'GreatVibes';
  padding-bottom: 5%;
  color: #ccbba2;
}
.hovcontpl{
  padding-bottom: 5.5%;
  font-family: 'AppleGaramondLight';
}
.p1{
  padding: 38.8%;
}
@media (max-width:768px){
  .p1{padding: 70% !important;}
  .hovcontp{

  }
}
@media (max-width: 1300px){
  .p1{padding: 45%}
}
@media (max-width: 1024px) {
  .titu1{font-size: 0.8em !important}
  .subtit1{font-size: 0.6em !important}
  .p1{padding: 50.8%;}
}
@media (max-width: 460px){
    .titu1{font-size: 0.7em !important;}
  .subtit1{font-size: 0.5em !important;}
}

@media (min-height: 1280px){
  .nav > li > a {
    margin-left: 30px !important;
    margin-right: 30px !important;
  }
}


.marcas a {
  display: inline-block;
  vertical-align: middle;
  outline: none;
  border: none;
  margin: 5px;
  text-decoration: none;
  box-sizing: border-box;
  color: -webkit-link;
  text-decoration: underline;
  cursor: auto;
}
.marcas ul li {
  width:15%;
  float:left;
  list-style-type: none;
}

  .list-inline li img:hover {
    opacity: 0.5;
    filter: alpha(opacity=50);
    -webkit-transition: opacity 250ms ease-in-out;
    -moz-transition: opacity 250ms ease-in-out;
    transition: opacity 250ms ease-in-out;
  }
</style>

<body class="video-loaded">

@include('Menu')

<div id="loaderHolder" style="display: none;">
    <div class="loader"></div>
</div>
<section id="weddingPlanner" class="main-content jumbotron">
       <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">  
             <div class="carousel-inner">
             
                             <div class="item">
                    <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Phuket">
                        
                        <img src="{{url('img/Inicio.png')}}"></figure>
                        <div class="carousel-caption">
                            <div class="caption-content">
                                <h1 class="os-animation animated fadeInDown tit1" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">CELEBRA EL MOMENTO</h1>
                              <h2 class="os-animation animated fadeInDown tit2" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">LIMA . CUSCO . PUNO</h2>
                            </div>
                        </div>
                </div>
                                <div class="item">
                    <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Services in Phuket">
                        
                        <img src="{{url('img/Inicio.png')}}"></figure>
                        <div class="carousel-caption">
                            <div class="caption-content">
                                <h1 class="os-animation animated fadeInDown tit1" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">CELEBRA EL MOMENTO</h1>
                              <h2 class="os-animation animated fadeInDown tit2" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">LIMA . CUSCO . PUNO</h2>
                            </div>
                        </div>
                </div>
                                <div class="item">
                    <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner Services Thailand Phuket">
                        
                        <img src="file/Inicio.png"></figure>
                        <div class="carousel-caption">
                            <div class="caption-content">
                                <h1 class="os-animation animated fadeInDown tit1" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">CELEBRA EL MOMENTO</h1>
                              <h2 class="os-animation animated fadeInDown tit2" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">LIMA . CUSCO . PUNO</h2>
                            </div>
                        </div>
                </div>
                                <div class="item active">
                    <figure class="responsive img-responsive" data-media240="{{url('img/Inicio.png')}}" data-media769="{{url('img/Inicio.png')}}" data-media1201="{{url('img/Inicio.png')}}" data-title="Bridal Planner">
                        <img src="{{url('img/Inicio.png')}}"></figure>
                        <div class="carousel-caption">
                            <div class="caption-content">
                                <h1 class="os-animation animated fadeInDown tit1" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">CELEBRA EL MOMENTO</h1>
                              <h2 class="os-animation animated fadeInDown tit2" data-os-animation="fadeInDown" data-os-animation-delay="100ms" style="animation-delay: 100ms;">LIMA . CUSCO . PUNO</h2>
                            </div>
                        </div>
                </div>
            </div>
            <ol class="carousel-indicators">   
                <li data-target="#mainCarousel" data-slide-to="0" class=""></li>
                <li data-target="#mainCarousel" data-slide-to="1" class=""></li>
                <li data-target="#mainCarousel" data-slide-to="2" class=""></li>
                <li data-target="#mainCarousel" data-slide-to="3" class="active"></li>
            </ol>
            <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev"><span class="icon-chevron-thin-left"></span></a>
            <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next"><span class="icon-chevron-thin-right"></span></a>
    </div>
</section>
<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
              <p class="hovcontp">NOVIOS</p>
              <p class="hovcontps">Cuenta el mito que del dedo anular sale una vena que va hasta el corazón, vena amoris o vena del amor es la conexión entre aquellos que se prometen amor y respeto </p>
              <h1 class="hovconth">Prometo amarte</h1>
              <p class="hovcontpl">Ver la colección completa</p>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p class="p1"></p>
              <!--<img src="file/">-->
           </div>
          </div>
        </div>

        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p style="padding: 44.5% 35%;">IMAGEN</p>
              <!--<img src="file/">-->
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <p style="color: white;font-family: 'Trajan Pro';padding-top: 10%;font-size: 300%">PATEK PHILIPPE</p>
              
              <p style="font-family: 'AppleGaramondLight';font-size: 148%;padding-left: 20%;padding-right: 20%;margin-bottom: 0px;">Aldo & Co recibe la confianza para ser representante de las mejores marcas de alta relojería a nivel mundial. Las mismas que ponen la precisión y elegancia al alcanze de nuestros clientes.</p>
              <h1 style="font-family: 'GreatVibes';padding-bottom: 5%;color: #ccbba2">Más allá del tiempo</h1>
              <p style="padding-bottom: 5.8%;font-family: 'AppleGaramondLight';">Ver la colección completa</p>
           </div>
          </div>
        </div>
        <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <p style="color: white;font-family: 'Trajan Pro';padding-top: 10%;font-size: 300%">JOYERÍA</p>
              
              <p style="font-family: 'AppleGaramondLight';font-size: 140%;padding-left: 15%;padding-right: 15%;margin-bottom: 0px;">Fieles a nuestra historia, Aldo&Co le da un lugar central a  la colección Amarilis. Inspirada en la poetiza peruana del siglo de Oro que le da nombre a la colección, y los misterios alrededor de su vida, los diseños Amarilis transmiten una visión romántica y respetuosa de las formas en el trabajo del oro.</p>
              <h1 style="font-family: 'GreatVibes';padding-bottom: 5%;color: #ccbba2">Oro soy</h1>

              <p style="padding-bottom: 5.6%;font-family: 'AppleGaramondLight';">Ver la colección completa</p>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p style="padding: 46.7% 35%;">IMAGEN</p>
              <!--<img src="file/">-->
           </div>
          </div>
       
        </div>

    </div>
</section>
<section id="raveContent" class="padded-content-sm os-animation animated fadeInUpBig" data-os-animation="fadeInUpBig" data-os-animation-delay="100ms" style="animation-delay: 100ms; background: #d6c6bb !important;padding: 0px !important;">
    <div class="container text-center">
      <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;">
            <div class="hovercontainer">
              <figure class="responsive img-responsive" data-media240="{{url('img/video-home.jpg')}}" data-media961="{{url('img/video-home.jpg')}}" alt=""><img src="{{url('img/video-home.jpg')}}"></figure>
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
@include('footer')
<div class="video-wrap">
   <div class="video-inner">
       <video class="video-player" controls="controls" preload="auto" poster="" title="The Bridal Planner">
       <source src="{{url('video/bridal-planner.m4v')}}" type="video/mp4">
       <source src="{{url('video/bridal-planner.webm')}}" type="video/webm">
       <source src="{{url('video/bridal-planner.ogv')}}" type="video/ogg">
       </video>
       <button class="action action--close">
           <span class="action__label icon-cross"></span>
       </button>
   </div>
</div>


<script src="{{url('js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write("<script src='{{url('js/jquery-1.11.3.min.js')}}'><\/script>")</script>
<script src="{{url('js/jquery-picture-min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('js/jquery-mobile-min.js')}}"></script>
<script src="{{url('js/plugins-min.js')}}"></script>
<script src="{{url('js/classie.js')}}"></script>
<script src="{{url('js/video.js')}}"></script>
<script>
$(function(){
    $('figure.responsive').picture();
    onScrollInit( $('.os-animation') );
    $("#mainCarousel").swiperight(function() {$("#mainCarousel").carousel('prev');});
    $("#mainCarousel").swipeleft(function() {$("#mainCarousel").carousel('next');});
    $("#raveCarousel").swiperight(function() {$("#raveCarousel").carousel('prev');});
    $("#raveCarousel").swipeleft(function() {$("#raveCarousel").carousel('next');});
    var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    if (iOS==true) { $('video').attr("autoplay"," ").load(); }
});
$(window).load(function() {
  $('#loaderHolder').fadeOut(500);
   portfolioHeight();fixNav();
});
$(window).resize(function() {fixNav();portfolioHeight();});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script',"{{url('js/analytics.js')}}",'ga');

  ga('create', 'UA-40443546-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>