@extends('layout')

@section('content')

<style type="text/css">
  .asf > li > a {color: #676767 !important;font-size: 0.95em;line-height: 50px;}
  @media(max-width: 1024px){
    .asf > li > a {
      font-size: 0.8em !important;
    }
  }
  
  .nav > li > a.active {margin-bottom:-3px;border-bottom: 2px solid #ded5cc !important;}
  .asf{border-bottom: 1px solid #a89797 !important;}

  .grid .row .hovercontainer figure img {
    width: 100% !important;
  }
  @media(max-width: 767px){
    .hidenli{
      display: none !important;
    }
    .activeflip{
      font-size: 3em !important;
    }
    .asf > li > a {
      color: white !important;
    }
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
                <h1 style="font-family: 'GreatVibes';padding-top: 10%;font-size: 5.5em;padding-bottom: 50px;">Joyería</h1>
             </div>
            </div>
          </div>
        </div>
  </section>

<section id="gridContent" class="grid whitebg" style="text-align: center;background: #ded5cc;">
  <div class="container">
        <div class="row">
            <ul class="nav asf"> <!--class="active"-->
              @foreach($TypesJoyas as $Type)
                <li @if($Type_selected==$Type->id) class="activeflip" @else class="hidenli" @endif><a id="{{$Type->id}}" href="{{url('Joyeria',array('Type'=>$Type->description))}}" @if($Type_selected==$Type->id)class="active" @endif>{{$Type->description}}</a></li>
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
@endsection