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
<!--https://codyhouse.co/gem/mega-dropdown/-->
<style type="text/css">
                      img{
                        max-width: 100% !important;
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
                <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;padding-bottom: 50px;">Contáctenos</h1>
               
             </div>
            </div>
          </div>
        </div>
  </section>

  <section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
      <div class="row" style="background: #ded5cc !important">
         <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer"> 
              <!-- <p class="hovcontp" style="padding: 31.5% 30%;"><a href="{{url('evento')}}" style="color: #f9f9f9 !important"></a></p> -->
              <div class="col-sm-12" style="padding: 5% 5%">
                @foreach($Marckets as $Tienda)
                <div class="col-sm-6">
                  <div class="col-sm-4"><img src="{{$Tienda->Images->route}}"></div>
                  <div class="col-sm-2" style="padding-left: 5%">
                    <p class="titu1" style="font-family: 'TrajanProBold';">{{$Tienda->description}}</p>
                    <a href=""><p style="font-family: 'TrajanProBold';">{{$Tienda->address}}</p></a>
                  </div>
                </div>
                @endforeach
              </div>
           </div>
          </div>
        </div>

<!--         <div class="row" style="background: #ded5cc !important">
          <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <a href="{{url('evento')}}"><p style="padding: 36.5% 35%;">IMAGEN</p></a>
           </div>
          </div>
         <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #ded5cc;text-align: center;margin: 0px !important;">
              <p class="hovcontp" style="padding: 31.5% 30%;"><a href="{{url('evento')}}" style="color: #f9f9f9 !important">EVENTO 2</a></p>
           </div>
          </div>
        </div> -->
<!-- 
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
      </div> -->
        
    </div>
</section>

<section id="featureBadges" class="whitebg padded-content-xs text-center" style="padding-top: 10%;background: #ded5cc;">
  <ul class="list-inline">
        <li><a target="_blank" href="http://www.mikimotoamerica.com/"><img width="180" height="40" src="{{url('img/mikimoto-01.png')}}" alt="Mikimoto"></a></li>
        <li><a target="_blank" href="http://www.patek.com/"><img width="160" height="80"  src="{{url('img/Logo-Patek.png')}}" alt="Patek Philippe"></a></li>
        <li><a target="_blank" href="http://www.mimimilano.com/"><img width="120" height="50"  src="{{url('img/Logo-Mimi.png')}}" alt="Mimí"></a><br></li>
    </ul>
    <ul class="list-inline">
        <li><a target="_blank" href="http://www.dior.com/"><img width="90" height="40" src="{{url('img/Logo-Dior.png')}}"  alt="Dior"></a></li>
        <li><a target="_blank" href="http://www.franckmuller.com/"><img width="150" height="50" src="{{url('img/Logo-Franck-Muller.png')}}"  alt="Franck Muller"></a></li>
        <li><a target="_blank" href="http://www.cuervoysobrinos.com/"><img width="150" height="60" src="{{url('img/Logo-cuervos-y-sobrinos.png')}}"  alt="Cuervo y Sobrinos"></a></li>
    </ul>
</section>
<section id="bookWeddingPlanner" class="whitebg padded-content-sm" style="background: #ded5cc;">
    <div class="container">
        <div class="row">
            <div class="os-animation col-xs-12 col-sm-12 col-md-2 col-lg-2 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;">
            </div>
            <div class="os-animation col-xs-12 col-sm-12 col-md-8 col-lg-8 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="200ms" style="animation-delay: 200ms;">
                <div class="text-center" style="font-family: 'TrajanProBold';">
                    <p style="margin-top: 50px;">
                    <a target="_blank" href="https://www.facebook.com/joyeriaaldo/?fref=ts&__mref=message_bubble"><i class="icon-facebook">  </i> ALDO & Co. </a> | 
                    <a target="_blank" href="https://www.instagram.com/joyeriaaldoyco/"> <i class="icon-instagram"></i> JOYERIAALDOYCO  </a></p>

                </div>
            </div>
            <div class="os-animation col-xs-12 col-sm-12 col-md-2 col-lg-2 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="300ms" style="animation-delay: 300ms;">
            </div>
        </div>
    </div>
</section>

<footer id="siteFooter" class="whitebg text-center" style="padding-bottom: 0px;">
    <div style="background-color: #a38e7a;color: black">
        <ul id="footerCredits" class="list-unstyled" style="margin-bottom: 0px;">
            <li><small style="font-family: 'AppleGaramondLight';font-size: 1.1em;">© 2016 Aldo & Co derechos reservados</small></li>
        </ul>
    </div>
</footer>

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