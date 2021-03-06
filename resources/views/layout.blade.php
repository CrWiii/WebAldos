<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
<script>(function(){var p,l,r=window.devicePixelRatio;if(navigator.platform==="iPad"){p=r===2?"/fav/startup/startup-tablet-portrait-retina.png":"/fav/startup/startup-tablet-portrait.png";l=r===2?"/fav/startup/startup-tablet-landscape-retina.png":"/fav/startup/startup-tablet-landscape.png";document.write('<link rel="apple-touch-startup-image" href="'+l+'" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="'+p+'" media="screen and (orientation: portrait)"/>');}else{p=r===2?"/fav/startup/startup-retina.png":"/fav/startup/startup.png";document.write('<link rel="apple-touch-startup-image" href="'+p+'"/>');}})()</script>

<link rel="apple-touch-startup-image" href="http://thebridalplanner.co/fav/startup/startup.png">
<!-- Prevents links from opening in mobile Safari -->
<!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->
</head>
<!--https://codyhouse.co/gem/mega-dropdown/-->
<style>
  @media(max-width: 767px){
    .hovcontps{
      display: none;    
    }
    .hovconth{
      display: none;
    }
  } 
  @media(max-width: 1024px){
    .hovcontp {
      font-size: 1.5em;
    }
    .hovcontps {
      font-size: 0.9em;
    }
    .hovconth {
      font-size: 1.8em;
    }

  }
</style>


<body class="video-loaded">
@include('Menu')
<div id="loaderHolder" style="display: none;">
  <div class="loader"></div>
</div>

@yield('content')




@include('footer')
</body>




<script src="{{url('js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write("<script src='{{url('js/jquery-1.11.3.min.js')}}'><\/script>")</script>
<script src="{{url('js/jquery-picture-min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/dura-main.js')}}"></script>
<script src="{{url('js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('js/jquery-mobile-min.js')}}"></script>
<script src="{{url('js/plugins-min.js')}}"></script>
<script src="{{url('js/classie.js')}}"></script>
<script src="{{url('js/video.js')}}"></script>
@yield('script')
<script>

$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll >= 50){
        $("#navt").addClass("navbar-default");
        // $("#navt").attr('data-id','true');
    }else{
      var valid_param = $("#navt").attr('data-id');//$('#btnbur').attr('data-id');
      altert(valid_param);        
    }
    
  });

function altert(valid_param){
  if(valid_param == 'true'){
    $("#navt").addClass("navbar-default");
  }else{
    $("#navt").removeClass("navbar-default");
  }
}
  $(document).on('click','#btnbur',function(){
    if($(window).scrollTop() == 0 || $(window).scrollTop() == $(document).height()- $(window).height()) {
      if($("#navt").hasClass("navbar-default")){
        $("#navt").removeClass("navbar-default");
        $("#navt").attr('data-id','false');

      }
      else{
        $("#navt").addClass("navbar-default");
        $("#navt").attr('data-id','true');
      }
    }else{
      if($("#navt").hasClass("navbar-default")){
        $("#navt").attr('data-id','true');
      }
    }

    
  });

$(document).on('click','#closeModal-sub',function(){
  $('#form-main-sub').hide('slow');
});
// $(document).on('click','#button-blue',function(){
//   $('#form-main-sub').hide('slow');
// });
$(document).on('click','#valida',function(){
  if($('#valida').is(":checked")){
    $('#button-blue').removeAttr('disabled','disabled');
  }else{
    $('#button-blue').attr('disabled','disabled');
  }
});
$(document).on('click','#SubcribirmeModal',function(){
  $('#form-main-sub').show('slow');
  $('html, body').animate({
    scrollTop: "350px"
  }, 800);
});

function testInput(event) {
   var value = String.fromCharCode(event.which);
   var pattern = new RegExp(/[a-zåäö ]/i);
   return pattern.test(value);
}

$('#first_name, #last_name').bind('keypress', testInput);


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

</script>

</body>
</html>