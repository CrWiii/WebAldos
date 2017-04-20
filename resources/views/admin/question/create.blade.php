@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Crear Pregunta</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form class="form-horizontal" role="form" method="POST" action="/storePregunta" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Pregunta:</label>
                                            <div class="col-md-10">
                                                <input type="text" id="question" name="question" class="form-control input-sm" placeholder=""></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-2 control-label input-sm">Respuesta:</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control input-sm" rows="5" id="answer" name="answer"></textarea>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-sm-2 control-label input-sm"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Crear</button>
                                                <a href="{{url('NoviosAdm')}}" class="btn btn-inverse waves-effect waves-light">Cancelar</a>
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