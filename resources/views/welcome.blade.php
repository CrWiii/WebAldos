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

      /*@charset "utf-8";*/
    /* CSS Document */
    /*body {
      margin:0px;
      overflow: hidden;
    }*/
    .wpbar {
      height:40px;
      vertical-align:middle;
    }
    .leftBrand {
      float:left; 
      padding:0 10 0 10;
      margin:3 10 3 0;
      border-right:
      thin solid #999999;
      height:34px;
    }
    .homeURL {
      color:#000000;
      text-decoration:none;
      font-size:24px;
    }
    .sourcebox {
      width:55%;
      margin-left:10px;
      float:left;
    }
    .sourcebox a {
      color:#666;
      text-decoration:none;
    }
    .sourcebox a:hover {
      text-decoration:underline;
    }
    .closeButton {
      float:right;
      padding:9px;
    }
    .socialNetworks {
      float:right; 
      padding:0 10px 0 10px;
      margin:0 10px 0 0;
      border-left:thin solid #999999;
      border-right:thin solid #999999;
      height:34px;
    }
    .featured {
      float:right;
      padding-top:9px
    }
    .ieFeatureButton {
      padding:5px 10px 5px 10px;
      margin: 0 10px;
      text-decoration:underline; 
      background:#C5D5AB;
      color:#000;
    }
    .featureButton {
      padding:5px 10px 5px 10px;
      margin:3px 10px 0 0;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      -khtml-border-radius: 5px; 
      border-radius: 5px; 
      border:thin #333 solid;
      text-decoration:none;
      background:rgba(88, 141, 1, .30); 
      color:#000;
    }
    .relatedContainer {
      display:none;
      background-color:#EFEFEF;
    }
    .relatedBody {
      padding: 5px 15px 15px 15px;
      border-bottom:medium #000 solid;
    }
    .relatedPost {
      margin:0 20px 0 20px;
      padding: 3px 5px 3px 5px;
      border-bottom:thin #DDD solid;
    }
    .sourceView {
      height:93%;
      width:100%;
      z-index:10;
      -webkit-box-sizing: border-box;
    }
    #ads{
      width:480px;
      height:60px;
      background:#fff;
      position:absolute;
      bottom:0;
      border:1px solid #E0E0E0;
    }
    #closead{
      height:12px;
      width:12px;
      background:url(imgs/closeads.png) no-repeat center;
      position:absolute;  
      top:0px;
      right:0px;
      cursor:pointer;
    }
    @media (max-width: 480px) {
      .sourcebox{
          display:none;
      }
    }



    #wrapper{
     margin:0 auto;
     padding:0px;
     text-align:center;
     width:995px;
    }
    #menu_div
    {
     /*float:left;*/
     padding:0px;
     width:710px;
     height:50px;
     line-height:50px;
     margin-left:145px;
     position:relative;
    }
    #menu_div #main_menu .menu_link
    {
     background-color:#2E2E2E;
     list-style-type:none;
     float:left;
     border-left:1px solid #666;
    }
    #menu_div #main_menu .menu_anchor
    {
     color:white;
     text-decoration:none;
     padding:20px;
    }
    #menu_div #main_menu .menu_link:hover #submenu_div
    {
     display:block;
    }
    #menu_div #submenu_div
    {
     display:none;
     background-color:white;
     width:600px;
     position:absolute;
     left:0px;
     width:702px;
     margin:0px;
     padding:0px;
    }
    #menu_div #submenu_div li
    {
     display:inline-block;
     margin:15px;
    }
    #menu_div #submenu_div li a
    {
     color:blue;
     text-decoration:none;
    }
    #menu_div #submenu_div li a img
    {
     max-height:80px;
    }


    /*

        .sub-nav-panel.open > .header-sub-menu {
          height: 282px;
          transition: height 0.3s ease;
        }

        .header-sub-menu {
          height: 0px;
          overflow: hidden;
          border-bottom: 1px solid #f6f6f6;
          border-top: 1px solid #f6f6f6;
          position: absolute;
          z-index: 2;
          left: 0;
          right: 0;
          transition: height 0s ease;
        }
        .header-sub-menu .inner-wrap ul li a {
          font-size: 15px;
          color: #403c35;
          text-transform: uppercase;
          font-family: "BigCaslon-Medium", "Didot W01 Roman", "Times New Roman", Times, Georgia, serif;
          border-top: 1px solid #ffffff;
          border-bottom: 1px solid #ffffff;
          transition: border 0.3s, color 0.3s;
          -webkit-transition: border 0.3s, color 0.3s;
          -moz-transition: border 0.3s, color 0.3s;
          -o-transition: border 0.3s, color 0.3s;
          padding-bottom: 7px;
          padding-top: 8px;
          text-decoration: none;
          width: 100%;
          float: left;
          letter-spacing: 0.1em;
        }
        .header-sub-menu .inner-wrap ul li a:hover {
          color: #8f723d;
          text-decoration: none;
        }
        .header-sub-menu .inner-wrap ul li.current a {
          border-color: #e4e4e4;
          text-decoration: none;
        }
        .header-sub-menu .inner-wrap .submenu-section,
        .header-sub-menu .inner-wrap .store-menu-list {
          position: absolute;
          width: 1480px;
        }
        .header-sub-menu .inner-wrap .submenu-section a,
        .header-sub-menu .inner-wrap .store-menu-list a {
          font-size: 16px;
          font-family: "BigCaslon-Medium", "Didot W01 Roman", "Times New Roman", Times, Georgia, serif;
          color: #403c35;
          text-transform: uppercase;
          letter-spacing: 0px;
          border-bottom: 1px solid #ffffff;
          transition: border 0.3s, color 0.3s;
          -webkit-transition: border 0.3s, color 0.3s;
          -moz-transition: border 0.3s, color 0.3s;
          -o-transition: border 0.3s, color 0.3s;
          padding-bottom: 10px;
        }
        .header-sub-menu .inner-wrap .submenu-section a:focus,
        .header-sub-menu .inner-wrap .store-menu-list a:focus {
          text-decoration: none;
        }
        .header-sub-menu .inner-wrap .submenu-section a:hover,
        .header-sub-menu .inner-wrap .store-menu-list a:hover {
          text-decoration: none;
          color: #8f723d;
          border-color: #8f723d;
        }
        .header-sub-menu .inner-wrap .submenu-section {
          width: 100%;
        }
        .header-sub-menu .inner-wrap .submenu-section a {
          font-size: 17px;
          text-transform: capitalize;
          color: #707070;
        }
        .header-sub-menu .catalog-menu-selector {
          padding: 15px 0;
          float: left;
          width: 100%;
        }

        .store-locator-menu a.top-link {
          float: left;
          width: 120px;
        }
        .store-locator-menu a.top-link img {
          height: 180px;
          width: 120px;
        }
        .store-locator-menu a.top-link span {
          color: #8f723d;
          font-size: 12px;
          display: block;
          text-transform: uppercase;
          margin: 15px auto 0;
        }
        .store-locator-menu .storelocator-subenu-schedule {
          background: #f6f6f6;
          height: auto;
          padding: 30px 0;
          margin: 0 0 15px;
        }
        .store-locator-menu .storelocator-subenu-schedule button {
          border: 1px solid #8f723d !important;
          width: 80%;
          margin: 0 auto 15px !important;
          padding: 17px 15px 15px !important;
          text-align: center;
          color: #403c35;
          font-size: 14px;
          text-transform: uppercase;
          line-height: 14px;
          font-weight: 400;
          font-family: "BigCaslon-Medium", "Didot W01 Roman", "Times New Roman", Times, Georgia, serif;
        }
        .store-locator-menu .storelocator-subenu-schedule button:hover {
          background: #8f723d;
          color: #fff;
          border: 1px solid #8f723d !important;
          margin: 0 auto 15px !important;
          padding: 17px 15px 15px !important;
        }
        .store-locator-menu .storelocator-subenu-schedule span {
          font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
          color: #8f723d !important;
          font-size: 12px;
          display: block;
          text-transform: uppercase;
          margin: 15px auto 0;
          text-align: center;
        }
        .store-locator-menu .retailers-link {
          width: 100%;
        }
        .store-locator-menu .retailers-link .button {
          border: 1px solid #8f723d !important;
          width: 100%;
          margin: 0 auto;
          padding: 20px 0 30px !important;
          text-align: center;
          color: #403c35 !important;
          font-size: 14px;
          text-transform: uppercase;
          line-height: 14px;
          font-weight: 400;
        }
        .store-locator-menu .retailers-link .button:hover {
          background: #8f723d;
          color: #fff !important;
          border: 1px solid #8f723d !important;
          margin: 0 auto;
          padding: 20px 0 30px !important;
        }

        .header-search-wrap {
          background-color: #fff;
          position: absolute;
          left: 0;
          border-top: 1px solid #f6f6f6;
    }*/
</style>

<body class="video-loaded">


@include('Menu')
<!--<section id="weddingPlanner" class="main-content jumbotron">
  <div id="menu_div">
    <div id="main_menu">
    <li class="menu_link" id="link1">
    <a href="" class="menu_anchor" id="1" onmouseover="get_submenu(this.id);">Electronics</a>
    <ul id="submenu_div"><li><a href="">Mobiles<br><img src="images/dynamic_menu/Mobiles.jpg"></a></li><li><a href="">Laptop<br><img src="images/dynamic_menu/Laptop.jpg"></a></li><li><a href="">Television<br><img src="images/dynamic_menu/Television.jpg"></a></li><li><a href="">Camera &amp; Accessories<br><img src="images/dynamic_menu/Camera &amp; Accessories.jpg"></a></li><li><a href="">Home Appliances<br><img src="images/dynamic_menu/Home Appliances.jpg"></a></li></ul>
    </li>
    <li class="menu_link" id="link2">
    <a href="" class="menu_anchor" id="2" onmouseover="get_submenu(this.id);">Fashion</a>
    <ul id="submenu_div"><li><a href="">Footwear<br><img src="images/dynamic_menu/Footwear.jpg"></a></li><li><a href="">Clothing<br><img src="images/dynamic_menu/Clothing.jpg"></a></li><li><a href="">Accessories<br><img src="images/dynamic_menu/Accessories.jpg"></a></li><li><a href="">Grooming And Wellness<br><img src="images/dynamic_menu/Grooming And Wellness.jpg"></a></li></ul>
    </li>
    <li class="menu_link" id="link3">
    <a href="" class="menu_anchor" id="3" onmouseover="get_submenu(this.id);">Home And Decoration</a>
    <ul id="submenu_div"><li><a href="">Kitchen<br><img src="images/dynamic_menu/Kitchen.jpg"></a></li><li><a href="">Bed<br><img src="images/dynamic_menu/Bed.jpg"></a></li><li><a href="">Sofa<br><img src="images/dynamic_menu/Sofa.jpg"></a></li><li><a href="">Table<br><img src="images/dynamic_menu/Table.jpg"></a></li><li><a href="">Chair<br><img src="images/dynamic_menu/Chair.jpg"></a></li></ul>
    </li>
    <li class="menu_link" id="link4">
    <a href="" class="menu_anchor" id="4" onmouseover="get_submenu(this.id);">Books And Media</a>
    <ul id="submenu_div"><li><a href="">Books<br><img src="images/dynamic_menu/Books.jpg"></a></li><li><a href="">Games<br><img src="images/dynamic_menu/Games.jpg"></a></li><li><a href="">Stationery<br><img src="images/dynamic_menu/Stationery.jpg"></a></li><li><a href="">Gaming Consoles<br><img src="images/dynamic_menu/Gaming Consoles.jpg"></a></li><li><a href="">Gaming Accessories<br><img src="images/dynamic_menu/Gaming Accessories.jpg"></a></li></ul>
    </li>
    <li class="menu_link" id="link5">
    <a href="" class="menu_anchor" id="5" onmouseover="get_submenu(this.id);">Auto And Sports</a>
    <ul id="submenu_div"><li><a href="">Car Accessories<br><img src="images/dynamic_menu/Car Accessories.jpg"></a></li><li><a href="">Bike Accessories<br><img src="images/dynamic_menu/Bike Accessories.jpg"></a></li><li><a href="">Fitness Tools<br><img src="images/dynamic_menu/Fitness Tools.jpg"></a></li><li><a href="">Sports Item<br><img src="images/dynamic_menu/Sports Item.jpg"></a></li></ul>
    </li>
    </div>
  </div>
</section>-->

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