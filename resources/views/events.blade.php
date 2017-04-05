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

    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
    body {
      font-family: 'Open Sans', 'sans-serif';
    }
    .mega-dropdown {
      position: static !important;
    }
    .mega-dropdown-menu {
        padding: 20px 0px;
        width: 100%;
        box-shadow: none;
        -webkit-box-shadow: none;
    }
    .mega-dropdown-menu > li > ul {
      padding: 0;
      margin: 0;
    }
    .mega-dropdown-menu > li > ul > li {
      list-style: none;
    }
    .mega-dropdown-menu > li > ul > li > a {
      display: block;
      color: #222;
      padding: 3px 5px;
    }
    .mega-dropdown-menu > li ul > li > a:hover,
    .mega-dropdown-menu > li ul > li > a:focus {
      text-decoration: none;
    }
    .mega-dropdown-menu .dropdown-header {
      font-size: 18px;
      color: #ff3546;
      padding: 5px 60px 5px 5px;
      line-height: 30px;
    }

    .carousel-control {
      width: 30px;
      height: 30px;
      top: -35px;

    }
    .left.carousel-control {
      right: 30px;
      left: inherit;
    }
    .carousel-control .glyphicon-chevron-left, 
    .carousel-control .glyphicon-chevron-right {
      font-size: 12px;
      background-color: #fff;
      line-height: 30px;
      text-shadow: none;
      color: #333;
      border: 1px solid #ddd;
    }

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
              <p class="hovcontp" style="padding: 31.5% 30%;">EVENTO 1</p>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p style="padding: 36.5% 35%;">IMAGEN</p>
           </div>
          </div>
        </div>

        <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p style="padding: 36.5% 35%;">IMAGEN</p>
              <!--<img src="file/">-->
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <p class="hovcontp" style="padding: 31.5% 30%;">EVENTO 2</p>
           </div>
          </div>
        </div>

      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer hovcont"> 
              <p class="hovcontp" style="padding: 31.5% 30%;">EVENTO 3</p>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p style="padding: 36.5% 35%;">IMAGEN</p>
           </div>
          </div>
      </div>
        

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

$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});


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