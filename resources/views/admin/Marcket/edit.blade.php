@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Editar Tienda</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form class="form-horizontal" role="form" method="POST" action="/ActualizarTienda/{{$Marcket->id}}" enctype="multipart/form-data" file="true">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Nombre:</label>
                                        <div class="col-md-10">
                                            <input type="text" id="description" name="description" class="form-control input-sm" placeholder="" value="{{$Marcket->description}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Dirección:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control input-sm" rows="5" id="address" name="address">{{$Marcket->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Subir Foto:</label>
                                        <div class="col-md-10">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control input-sm" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename">{{$Marcket->Images->description}}</span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Seleccionar Archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="image" id="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                                    <center><img src="{{ asset($Marcket->Images->route) }}" alt="" height="200"></center>
                                        </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label input-sm"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Registrar</button>
                                            <a href="{{url('Marcket')}}" class="btn btn-inverse waves-effect waves-light"   >Cancelar</a>
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
