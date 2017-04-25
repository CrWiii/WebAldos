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
                @foreach($frames as $tit)
                  <li><a href="{{url('ElMundoDeAldo',array('tit'=>$tit->slug))}}" @if($slug==$tit->slug)class="active" @endif>{{$tit->title}}</a></li>
                @endforeach
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
                <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">  
                       <div class="carousel-inner">
                        <?php $i=0;?>
                        @foreach($frames as $frame)
                          @if($slug==$frame->slug)
                            @foreach($frame->Subframes as $Subframe)
                              @if($Subframe->state==true)
                                @if($i==0)<div class="item active">@else<div class="item">@endif
                                  <figure class="responsive img-responsive" data-media240="{{url($Subframe->Images->route)}}" data-media769="{{url($Subframe->Images->route)}}" data-media1201="{{url($Subframe->Images->route)}}" data-title="Bridal Planner Phuket">
                                    <img src="{{url($Subframe->Images->route)}}">
                                  </figure>
                                  <p style="padding: 2% 2%;">{{$Subframe->title}}</p>
                                      <p style="padding: 2% 2%;">{{$Subframe->content}}</p>
                                </div>
                                <?php $i++;?>
                              @else
                              @endif
                            @endforeach
                          @endif
                        @endforeach


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