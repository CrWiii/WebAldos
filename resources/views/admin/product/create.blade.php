@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Crear Producto</h4> </div>
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
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Nombre:</label>
                                            <div class="col-md-10">
                                                <input type="text" id="state-success" name="state-success" class="form-control input-sm" placeholder="..."> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label input-sm">Categoria:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control input-sm">
                                                    <option>Seleccione una Categoria</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Descrición:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control input-sm" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label input-sm">Subir Foto:</label>
                                            <div class="col-sm-10">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control input-sm" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Seleccionar Archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label input-sm"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Crear</button>
                                                <a href="{{url('JoyasAdm')}}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
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