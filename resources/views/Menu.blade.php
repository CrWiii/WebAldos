<link href="{{asset('css/dura/dura-main.css')}}" rel="stylesheet">
<link href="{{asset('css/dura/dura-responsive.css')}}" rel="stylesheet">
<style>
  @media(max-width: 1000px){
  .img-hi{
    display: none;
  }
}
</style>
<div class="wrapper">

      <div class="container container-shadow no-padding absolute" style="top: 0px;">
        <div class="overlay"></div>
        

        <div class="container nav-container">
          <div class="row header-bottom-row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
     
              <nav class="navbar navbar-inverse navbar-static-top" style="padding-bottom: 0px;">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                <img class="svg imagesty" src="{{url('img/logo_aldo.png')}}" alt="">
            </a>
                    <!--a class="navbar-brand" href="#">Brand</a-->
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                      <li><a href="{{url('ElMundoDeAldo')}}">EL MUNDO DE ALDO</a></li>

                      
                      <li class="dropdown dropdown-mega"><a href="{{url('Novios')}}">NOVIOS  <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-mega-content">
                          <div class="row" style="padding: 20px; padding-bottom: 0;text-align: center; margin:auto;width: 100%">
                            <style type="text/css">
                              .asfa > img{
                                max-width: 45% !important;
                              }
                            </style>
                            <div class="col-lg-12"> 
                            @foreach($TypesNovios as $TypeN)
                              @if($TypeN->slug!='colectivo_de_novios')
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                  <ul>
                                    <span><img src="{{url('img/anillo.png')}}" class="img-responsive img-hi"></span>
                                      <li style="text-align: center;"><a href="{{url('Novios',array('Type'=>$TypeN->slug))}}">{{$TypeN->description}}</a></li>
                                  </ul>
                                </div>
                              @endif
                            @endforeach
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="dropdown dropdown-mega"><a href="{{url('Joyeria')}}">JOYERIA <span class="caret"></span></a>
                        <div class="dropdown-menu dropdown-mega-content">
                          <div class="row" style="padding: 20px; padding-bottom: 0">
                          <div class="col-lg-12"> 
                            <!-- <div class="col-md-10"> -->
                            <?php $f=0;?>
                            @foreach($TypesJoyas as $TypeJ)
                              @if($f<6)
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <ul>
                                  <li style="text-align: center;"><a href="{{url('Joyeria',array('Type'=>$TypeJ->slug))}}"><span><img src="{{url('img/anillo.png')}}" class="img-responsive img-hi" alt="product 1" style="margin: auto;">{{$TypeJ->description}}</a></li>
                                </ul>
                              </div>
                              @endif
                              <?php $f++;?>
                            @endforeach
                            <!-- </div> -->
                            <!-- <div class="col-md-2">
                              <div class="col-md-10 col-xs-2" style="padding-top: 3px;">
                                <ul>
                                  <img src="{{url('img/anillo.png')}}" class="img-responsive" alt="product 1" style="margin: auto;" class="img-responsive img-hi">
                                  <li style="text-align: center;"><a href="{{url('Joyeria',array('Type'=>$TypeJ->description))}}"><h3>{{$TypeJ->description}}</h3></a></li>
                                </ul>
                              </div>
                            </div> -->
                          </div>
                          </div>
                        </div>
                      </li>

                      <ul class="nav navbar-nav navbar-right" >
                        <li><a href="{{url('PatekPhilippe')}}">PATEK PHILIPPE</a></li>
                        <li><a href="{{url('eventos')}}">EVENTOS</a></li>
                        <li><a href="{{url('Contactenos')}}">CONTÁCTENOS</a></li>
                      </ul>

                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>          
        </div>       
      </div>
