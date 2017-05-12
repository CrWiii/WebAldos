@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Crear Frame</h4> </div>
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
<!--                             <h3 class="box-title m-b-0">PRODUCT NAME</h3>
                            <p class="text-muted m-b-30 font-13"></p> -->
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                @if (count($errors) > 0)
								    <div class="alert alert-danger">
								        <ul>
								            @foreach ($errors->all() as $error)
								                <li>{{ $error }}</li>
								            @endforeach
								        </ul>
								    </div>
								@endif
                                    <form class="form-horizontal" role="form" method="POST" action="/storeSlide" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Titulo:</label>
                                            <div class="col-md-10">
                                                <input type="text" id="title" name="title" class="form-control input-sm" placeholder=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Subtitulo:</label>
                                            <div class="col-md-10">
                                                <input type="text" id="subtitle" name="subtitle" class="form-control input-sm" placeholder=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Link:</label>
                                            <div class="col-md-10">
                                                <input type="text" id="route" name="route" class="form-control input-sm" placeholder=""></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label input-sm">Subir Foto:</label>
                                            <div class="col-sm-10">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control input-sm" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Seleccionar Archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="image" id="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label input-sm"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Crear</button>
                                                <a href="{{url('Inicio')}}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
                                                
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