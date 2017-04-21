
<nav class="navbar navbar-fixed-top" style="padding-bottom: 0px !important" id="topmenu">
      <div class="container">
         <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="svg imagesty" src="{{url('img/logo_aldo.png')}}" alt="">
            </a>
        </div>
          <div id="navbar" class="navbar-collapse collapse" style="font-family: 'TrajanProBold' !important;font-size: 12px;">
              <ul class="nav navbar-nav navbar-left" style="margin-top: 0px !important">
                <li><a href="{{url('ElMundoDeAldo')}}">EL MUNDO DE ALDO</a></li>
                <li class="dropdown mega-dropdown"><a href="{{url('Novios')}}" class="dropdown-toggle" data-toggle="dropdown">NOVIOS  <span class="caret"></span></a>
                  <ul class="dropdown-menu mega-dropdown-menu" style="background-color: #e7e5d0">
                    <div class="col-sm-12">
                    <style type="text/css">
                      .asfa > img{
                        max-width: 45% !important;
                      }
                    </style>
                    @foreach($TypesNovios as $TypeN)
                    @if($TypeN->slug!='colectivo_de_novios')
                      <li class="col-sm-3">
                        <ul>
                          <li class="dropdown-header">
                            <a href="{{url('Novios',array('Type'=>$TypeN->slug))}}"><span class="asfa"><img src="{{url('img/anillo.png')}}" class="img-responsive" alt="product 1" style="display: block;margin: auto;"></span>
                                <h5 style="text-align: center;font-family: 'AppleGaramondLight';font-size: 0.9em;">{{$TypeN->description}}</h5></a>
                          </li>
                        </ul>
                      </li>
                    @endif
                    @endforeach
 
                    </div>
                  </ul>
                </li>
                <li class="dropdown mega-dropdown"><a href="{{url('Joyeria')}}" class="dropdown-toggle" data-toggle="dropdown">JOYERIA <span class="caret"></span></a>
                  <ul class="dropdown-menu mega-dropdown-menu" style="background-color: #e7e5d0">
                    <div class="col-sm-12">

                      <div class="col-sm-10">
                      <?php $f=0;?>
                      @foreach($TypesJoyas as $TypeJ)
                        @if($f<6)
                        <li class="col-sm-2">
                          <ul>
                            <li class="dropdown-header" style="text-align: center !important">
                              <a href="{{url('Joyeria',array('Type'=>$TypeJ->slug))}}"><span><img src="{{url('img/anillo.png')}}" class="img-responsive" alt="product 1" style="display: block;margin: auto;"></span>
                              <h5 style="text-align: center;font-family: 'AppleGaramondLight';font-size: 1.2em;">{{$TypeJ->description}}</h5></a>
                            </li>
                          </ul>
                        </li>
                        @endif
                        <?php $f++;?>
                      @endforeach
                      </div>
                      

                      <div class="col-sm-2">
                        <div class="col-sm-12">
                          <li class="col-sm-10">
                            <ul>
                              <li class="dropdown-header">
                                <a href="{{url('Joyeria',array('Type'=>$TypeJ->description))}}"><span><img src="{{url('img/anillo.png')}}" class="img-responsive" alt="product 1" style="display: block;margin: auto;"></span>
                                <h5 style="text-align: center;font-family: 'AppleGaramondLight';font-size: 1.2em;">{{$TypeJ->description}}</h5></a>
                              </li>
                            </ul>
                          </li>
                        </div>
                      </div>
                    </div>
                  </ul>
                </li>

              </ul>
              <ul class="nav navbar-nav navbar-right" >
                <li><a href="{{url('PatekPhilippe')}}">PATEK PHILIPPE</a></li>
                <li><a href="{{url('eventos')}}">EVENTOS</a></li>
                <li><a href="{{url('Contactenos')}}">CONTÁCTENOS</a></li>
              </ul>
            </div>
     </div>
</nav>