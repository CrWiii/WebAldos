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
<!-- <script async="" src="{{url('js/analytics.js')}}"></script> -->
<!-- <script src="{{url('js/modernizr-2.8.3.min.js')}}"></script> -->
<link href="{{url('css/css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{url('css/application.css')}}">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<script>(function(){var p,l,r=window.devicePixelRatio;if(navigator.platform==="iPad"){p=r===2?"/fav/startup/startup-tablet-portrait-retina.png":"/fav/startup/startup-tablet-portrait.png";l=r===2?"/fav/startup/startup-tablet-landscape-retina.png":"/fav/startup/startup-tablet-landscape.png";document.write('<link rel="apple-touch-startup-image" href="'+l+'" media="screen and (orientation: landscape)"/><link rel="apple-touch-startup-image" href="'+p+'" media="screen and (orientation: portrait)"/>');}else{p=r===2?"/fav/startup/startup-retina.png":"/fav/startup/startup.png";document.write('<link rel="apple-touch-startup-image" href="'+p+'"/>');}})()</script><link rel="apple-touch-startup-image" href="http://thebridalplanner.co/fav/startup/startup.png">
<!-- Prevents links from opening in mobile Safari -->
<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
</head>
<!--https://codyhouse.co/gem/mega-dropdown/-->

<body>

<style type="text/css">
  .asf > li > a {color: #676767 !important;font-size: 1em;line-height: 50px;}
  
  .nav > li > a.active {margin-bottom:-3px;border-bottom: 2px solid #ded5cc !important;}
  .asf{border-bottom: 1px solid #a89797 !important;}
  .btn-primary{
    background-color: #342825;
    border-color: #342825;
    color: #ffffff !important;
  }
</style>
<div id="loaderHolder" style="display: none;">
    <div class="loader"></div>
</div>
@include('Menu')

<section id="gridContent" class="grid whitebg">
     <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
        <div class="row"">
           <div class="os-animation col-xs-12 col-sm-12 col-md-12 col-lg-12 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="padding-top: 7%;background: #ded5cc;text-align: center;margin: 0px !important;">
                <h1 style="font-family: 'GreatVibes';padding-top: 3%;font-size: 5.5em;padding-bottom: 50px;"></h1>
             </div>
            </div>
          </div>
        </div>
</section>

<section id="gridContent" class="grid whitebg" style="background: #ded5cc;">
   <div class="container-fluid">
      <div class="row" style="background-color: #d6c6bb">
      
    <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
      <div class="hovercontainer">
         <figure class="responsive img-responsive" data-media240="{{$product->Images->route}}" data-media961="{{$product->Images->route}}" alt="Krystle &amp; Coby"></figure>
      </div>
    </div>
    <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
      <div class="hovercontainer">
         <div style="padding: 20% 10%;text-align: center">
            <h1 style="color: white;font-family: 'Trajan Pro';font-size: 3em;">{{$product->name}}</h1>
            <p>{{$product->description}}</p>
         <!-- <button class="btn btn-primary" id="CotizarBtn" style="color: #676767;">Solicitar Cotización</button> -->
         <button type="button" class="btn btn-primary btn-lg" id="CotizarModal">{{trans('messages.t12')}}</button>
         </div>
      </div>
    </div>

    </div>
    </div>
</section>



@include('footer')
<style type="text/css">
  #form-main{
  width:100%;
  float:left;
  padding-top:0px;
}

#form-div {
  background-color:rgb(214, 198, 187);
  padding-left:35px;
  padding-right:35px;
  padding-top:35px;
  padding-bottom:50px;
  width: 450px;
  float: left;
  left: 50%;
  position: absolute;
  margin-top:30px;
  margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
  top: 250px;
  border: 2px solid #525050;
}

.feedback-input {
  color:#525050;
  font-family: "PT Sans", Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 0;
  line-height: 22px;
  background-color: #fbfbfb;
  padding: 13px 13px 13px 54px;
  margin-bottom: 10px;
  width:100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
  background: #fff;
  box-shadow: 0;
  border: 3px solid #525050;
  color: #525050;
  outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
  color:#30aed6;
  border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
  background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#name:focus{
  background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
  background-size: 30px 30px;
  background-position: 8px 5px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#email{
  background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}
#celphone{
  background-image: url(http://inspiredaustin.com/upload/1024x0-cell-phone-number-svg-icon-ee-710619.png);
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}


#email:focus{
  background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

#comment{
  background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
  background-size: 30px 30px;
  background-position: 11px 8px;
  background-repeat: no-repeat;
}

textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
  background-color:white;
}

#button-blue{
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  float:left;
  width: 100%;
  border: #525050 solid 4px;
  cursor:pointer;
  background-color: #525050;
  color:white;
  font-size:24px;
/*  padding-top:22px;s
  padding-bottom:22px;*/
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

@media only screen and (max-width: 580px) {
  #form-div{
    left: 3%;
    margin-right: 3%;
    width: 88%;
    margin-left: 0;
    padding-left: 3%;
    padding-right: 3%;
  }
}
</style>
<div id="form-main" style="display: none">
  <div id="form-div">
    <i class="" style="float:right;position: relative; top:-25px; right: -15px color: #342825 !important"><a id="closeModal" style="cursor: pointer;">X</a></i>
    <form class="form" id="form1" method="post" action="/storePer">
      {{csrf_field()}}
      <p class="name">
        <input name="first_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="{{trans('messages.t30')}}" id="first_name" required="required"/>
      </p>

      <p class="name">
        <input name="last_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="{{trans('messages.t31')}}" id="last_name" required="required"/>
      </p>
      
      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="{{trans('messages.t32')}}" required="required" />
      </p>

      <p class="celphone">
        <input name="celphone" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="{{trans('messages.t33')}}" id="celphone" required="required"/>
      </p>
      <input type="hidden" name="parm" value="coti">

      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
</div>

<script src="{{url('js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write("<script src='{{url('js/jquery-1.11.3.min.js')}}'><\/script>")</script>
<script src="{{url('js/jquery-picture-min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/jquery.waypoints.min.js')}}"></script>
<script src="{{url('js/jquery-mobile-min.js')}}"></script>
<script src="{{url('js/plugins-min.js')}}"></script>

<script type="text/javascript">
$(document).on('click','#closeModal-sub',function(){
  $('#form-main-sub').hide('slow');
});
$(document).on('click','#SubcribirmeModal',function(){
  $('#form-main-sub').show('slow');
  $('html, body').animate({
    scrollTop: "50px"
}, 800);
});

 $(document).on('click','#closeModal',function(){
      $('#form-main').hide('slow');
    });

$(document).on('click','#CotizarModal',function(){
  $('#form-main').show('slow');
  $('html, body').animate({
    scrollTop: "50px"
}, 800);
});


  function testInput(event) {
    var value = String.fromCharCode(event.which);
    var pattern = new RegExp(/[a-zåäö ]/i);
    return pattern.test(value);
  }
$('#first_name, #last_name').bind('keypress', testInput);

</script>

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

  $("#button").click(function(e) {
        e.preventDefault();
        $("#information, #content").addClass("active");
    });
    $(window).scroll(function(){
        if($(window).scrollTop()>50) && $("#information").hasClass("active") ){
            $("#content").removeClass("active");
            $("#information").removeClass("active");
        }
     });

</script>

</body>
</html>