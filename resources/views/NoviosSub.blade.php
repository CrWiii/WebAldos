@extends('layout')

@section('content')

<style type="text/css">
  .asf > li > a {color: #676767 !important;font-size: 0.8em;line-height: 50px;}
  
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
                <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;padding-bottom: 50px;">Novios</h1>
             </div>
            </div>
          </div>
        </div>
  </section>

<section id="gridContent" class="grid whitebg" style="text-align: center;background: #ded5cc;">
  <div class="container">
        <div class="row">
            <ul class="nav asf">
                @foreach($TypesNovios as $Type)               
                <li><a id="{{$Type->id}}" href="{{url('Novios',array('Type'=>$Type->slug))}}" @if($Type_selected==$Type->id)class="active" @endif>{{$Type->description}}</a></li>
                
                @endforeach
            </ul>

        </div>
  </div>
</section>

<?php $i=0;?>
<section id="gridContent" class="grid whitebg" style="background: #ded5cc;">
  <div class="container-fluid">
      <div class="row">
      @foreach($Products as $Product)
        <div class="os-animation col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="fadeInUp" data-os-animation-delay="100ms">
          <div class="hovercontainer">
            <a href="{{url('Producto',array('id'=>$Product->id))}}"><figure class="responsive img-responsive" data-media240="{{$Product->Images->route}}" data-media961="{{$Product->Images->route}}" alt="Krystle &amp; Coby"></figure></a>
            <p style="text-align: center">{{$Product->name}}</p>
          </div>
        </div>
        <?php $i++; ?>
        @endforeach
    </div>
  </div>
</section>
<div class="" style="background-color: #ded5cc;text-align: center">
{!! $Products->links() !!}    
</div>


<style type="text/css">
  .subhover{
    color: white;
    font-family: 'Trajan Pro';
    font-size: 3em;margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }
  .subhover2{
    font-family: 'Trajan Pro';
    font-size: 1em;margin-left: auto;
    margin-right: auto;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }
  
</style>
<section id="gridContent" class="grid whitebg">
   <div class="container-fluid" style="padding: 0px !important; margin: 0px !important;">
    <?php $i=2;?>
      @foreach($Questions as $Question)
        @if($i%2==0)
          <div class="row" style="background: #ded5cc !important">
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 550px;"> 
                  <div class="subhover">
                    <p style="color: #f9f9f9 !important">{{$Question->question}}</p>
                  </div>
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;height: 550px;">
                  <div class="subhover2">
                    <p>{{$Question->answer}}</p>
                  </div>
               </div>
              </div>
          </div>
        @else
          <div class="row" style="background: #ded5cc !important">
            <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
              <div class="hovercontainer" style="background: #d6c6bb;text-align: center;margin: 0px !important;height: 550px;">
                <div class="subhover2">
                  <p>{{$Question->answer}}</p>
                </div>
               </div>
              </div>
             <div class="os-animation col-xs-12 col-sm-6 col-md-6 col-lg-6 animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="100ms" style="animation-delay: 100ms;padding: 0px !important; margin: 0px !important;">
                <div class="hovercontainer hovcont" style="height: 550px;"> 
                  <div class="subhover">
                    <p style="color: #f9f9f9 !important">{{$Question->question}}</p>
                  </div>
               </div>
              </div>
            </div>
          </div>
        @endif
      <?php $i++; ?>
      @endforeach
    </div>
</section>
@endsection