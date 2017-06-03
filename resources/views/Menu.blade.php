<link href="{{asset('css/dura/dura-main.css')}}" rel="stylesheet">
<link href="{{asset('css/dura/dura-responsive.css')}}" rel="stylesheet">

<style>
  @media(max-width: 1000px){
  .img-hi{
    display: none;
  }
}
</style>
<nav id="navt" class="navbar navbar-fixed-top" style="padding-bottom: 0px;" data-id="false">
      <div class="container">
         <div class="navbar-header">
              <button id="btnbur" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img class="svg imagesty" src="{{url('img/logo_aldo.png')}}" alt="">
            </a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="{{url('ElMundoDeAldo')}}">{{trans('messages.t1')}}</a></li>
                <li class="dropdown dropdown-mega"><a href="{{url('Novios')}}">{{trans('messages.t2')}}<span class="caret"></span></a>
                  <div class="dropdown-menu dropdown-mega-content">
                    <div class="row" style="padding: 20px; padding-bottom: 0;text-align: center; margin:auto;width: 100%">
                      <style type="text/css">
                        .asfa > img{
                          max-width: 45% !important;
                        }
                      </style>
                      <div class="col-lg-12"> 
                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div> -->
                      @foreach($TypesNovios as $TypeN)
                        @if($TypeN->slug!='colectivo_de_novios')
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding-left: 5% !important; padding-right: 5% !important">
                            <ul>
                                <li style="text-align: center;"><a href="{{url('Novios',array('Type'=>$TypeN->slug))}}"><span><img src="{{url($TypeN->Images->route)}}" class="img-responsive img-hi"></span>{{$TypeN->description}}</a></li>
                            </ul>
                          </div>
                        @endif
                      @endforeach
                      </div>
                    </div>
                  </div>
                </li>
                <li class="dropdown dropdown-mega"><a href="{{url('Joyeria')}}"">{{trans('messages.t3')}}</a>
                  <div class="dropdown-menu dropdown-mega-content">
                          <div class="row" style="padding: 20px; padding-bottom: 0">
                          <div class="col-lg-12"> 
                            <?php $f=0;?>
                            @foreach($TypesJoyas as $TypeJ)
                              @if($f<6)
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <ul>
                                  <li style="text-align: center;"><a href="{{url('Joyeria',array('Type'=>$TypeJ->slug))}}"><span><img src="{{url('img/anillo.png')}}" class="img-responsive img-hi" style="margin: auto;">{{$TypeJ->description}}</a></li>
                                </ul>
                              </div>
                              @endif
                              <?php $f++;?>
                            @endforeach
                          </div>
                      </div>
                    </div>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('PatekPhilippe')}}">{{trans('messages.t4')}}</a></li>
                <li><a href="{{url('eventos')}}">{{trans('messages.t5')}}</a></li>
                <li><a href="{{url('Contactenos')}}">{{trans('messages.t6')}}</a></li>
              </ul>
            </div>
     </div>
</nav> 

