@extends('layout')

@section('content')

<style type="text/css">
  .asf > li > a {color: #676767 !important;font-size: 1em;line-height: 50px;}
  
  .nav > li > a.active {margin-bottom:-3px;border-bottom: 2px solid #ded5cc !important;}
  .asf{border-bottom: 1px solid #a89797 !important;}

</style>
<div id="loaderHolder" style="display: none;">
    <div class="loader"></div>
</div>

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
         <a class="btn btn-primary" href="#" style="color: #676767;">Solicitar Cotización</a>
         </div>
      </div>
    </div>

         

          
    </div>
    </div>
</section>



@endsection