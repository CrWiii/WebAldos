@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Crear Evento</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <!-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                @if(Session::has('success'))
                                    <div class="alert-box success">
                                      <h2>{!! Session::get('success') !!}</h2>
                                    </div>
                                  @endif
                                    <form class="form-horizontal" role="form" method="POST" action="/storeEvento" enctype="multipart/form-data" file="true">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Titulo:</label>
                                        <div class="col-md-10">
                                            <input type="text" id="description" name="description" class="form-control input-sm" placeholder=""></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Descrición:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control input-sm" rows="5" id="content" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Subir Fotos:</label>
                                        <div class="col-md-10">
                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="file" name="images[]" multiple>
                                                <p class="errors">{!!$errors->first('images')!!}</p>
                                                @if(Session::has('error'))
                                                <p class="errors">{!! Session::get('error') !!}</p>
                                                @endif
                                             </div>
                                        </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label input-sm"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Registrar</button>
                                            <a href="{{url('Eventos')}}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


  


@endsection