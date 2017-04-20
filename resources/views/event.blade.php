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
      <div class="os-animation col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
         <div class="os-animation col-xs-10 col-sm-10 col-md-10 col-lg-10 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
            <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;">
              <p class="hovcontp" style="padding-top: 5%;">{{$Eventt->description}}</p>
              
              
                <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">  
                       <div class="carousel-inner">
                       <?php $i = 0;?>
                        @foreach($Eventt->Images as $Imagen)
                          @if($i==0)
                            <div class="item active">
                              <figure class="responsive img-responsive" data-media240="{{$Imagen->route}}" data-media769="{{$Imagen->route}}" data-media1201="{{$Imagen->route}}" data-title="Bridal Planner Phuket">
                                  <img src="{{$Imagen->route}}"></figure>
                            </div>
                          @else
                            <div class="item">
                              <figure class="responsive img-responsive" data-media240="{{$Imagen->route}}" data-media769="{{$Imagen->route}}" data-media1201="{{$Imagen->route}}" data-title="Bridal Planner Phuket">
                                  <img src="{{$Imagen->route}}"></figure>
                            </div>
                          @endif
                          <?php $i++; ?>

                        @endforeach
                        <ol class="carousel-indicators"> 
                        <?php $f = 0;?>  
                          @foreach($Eventt->Images as $Imagen)
                            @if($f==0)<li data-target="#mainCarousel" data-slide-to="{{$f}}" class="active"></li>
                            @else
                            <li data-target="#mainCarousel" data-slide-to="{{$f}}" class=""></li>
                            @endif
                            <?php $f++; ?>
                          @endforeach
                        </ol>

                      </div>
                      
                      <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev"><span class="icon-chevron-thin-left"></span></a>
                      <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next"><span class="icon-chevron-thin-right"></span></a>
                </div>
              
                      

              <p style="padding: 2% 2%;">{{$Eventt->content}}</p>
           </div>
          </div>
          <div class="os-animation col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
        </div>
    </div>
</section>
@endsection