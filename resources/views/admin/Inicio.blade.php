@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Inicio</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <div class="row">
                     <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#FRAMES" aria-controls="FRAMES" role="tab" data-toggle="tab" aria-expanded="true"><span>LISTA DE FRAMES</span></a></li>
                                <li role="presentation" class=""><a href="#SLIDE" aria-controls="SLIDE" role="tab" data-toggle="tab" aria-expanded="true"><span>SLIDE</span></a></li>
                                <li role="presentation" class=""><a href="#VIDEO" aria-controls="VIDEO" role="tab" data-toggle="tab" aria-expanded="true"><span>VIDEO</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="FRAMES">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                    <div class="white-box">
                                            <h3 class="box-title">Lista de Frames</h3>
                                            <div class="row sales-report">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <a href="{{url('NuevoFrame/2')}}" class="btn btn-inverse waves-effect waves-light">Nuevo</a>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                                    <!-- <h1 class="text-right text-info m-t-20">$3,690</h1> --> </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>TITULO</th>
                                                            <th>DESCRIPCIÓN</th>
                                                            <th>IMAGEN</th>
                                                            <th>ESTADO</th>
                                                            <th>FECHA CREACIÓN</th>
                                                            <th>ACCIÓN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($frames as $frame)
                                                        <tr>
                                                            <td>{{$frame->id}}</td>
                                                            <td>{{$frame->title}}</td>
                                                            <td>{{$frame->content}}</td>
                                                            <td> <img src="{{ asset($frame->Images->route) }}" alt="" height="50"></td>
                                                            <td>@if($frame->state==1)<span class="label label-success label-rouded">ACTIVO</span> @else <span class="label label-danger label-rouded">INACTIVO</span> @endif </td>
                                                            <td>{{  date('d/m/Y', strtotime($frame->created_at)) }}</td>
                                                            <td class="text-nowrap">
                                                                <a href="{{URL::to('EditarFrame',array('id'=>$frame->id))}}" data-toggle="tooltip" data-original-title="Editar"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                                <a href="{{URL::to('SubframeList',array('id'=>$frame->id))}}" data-toggle="tooltip" data-original-title="SubFrame"><i class="fa fa-plus-square-o text-inverse m-r-10"></i></a>
                                                                @if($frame->state==1) <a href="{{URL::to('DesactivarFrame',array('id'=>$frame->id))}}" data-toggle="tooltip" data-original-title="Desactivar"> <i class="fa fa-circle-o text-inverse m-r-10"></i></a>
                                                                @else <a href="{{URL::to('ActivarFrame',array('id'=>$frame->id))}}" data-toggle="tooltip" data-original-title="Activar"> <i class="fa fa-circle text-inverse m-r-10"></i></a>
                                                                @endif
                                                                <a style="cursor: pointer;" data-toggle="tooltip" data-original-title="Eliminar" data-id="{{$frame->id}}" id="EliminarFrame"> <i class="fa fa-close text-danger"></i> </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="SLIDE">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="white-box">
                                            <h3 class="box-title">Slide</h3>
                                                <div class="row sales-report">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <a href="{{url('Slide')}}" class="btn btn-inverse waves-effect waves-light">Nuevo</a>
                                                    </div>
                                                </div>
                                    <div class="table-responsive">
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>TITULO</th>
                                            <th>SUBTITULO</th>
                                            <th>IMAGEN</th>
                                            <th>ESTADO</th>
                                            <th>FECHA CREACIÓN</th>
                                            <th>ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($slides as $fr)
                                                        <tr>
                                                            <td>{{$fr->title}}</td>
                                                            <td>{{$fr->subtitle}}</td>
                                                            <td> <img src="{{ asset($fr->Images->route) }}" alt="" height="50"></td>
                                                            <td>@if($fr->state==1)<span class="label label-success label-rouded">ACTIVO</span> @else <span class="label label-danger label-rouded">INACTIVO</span> @endif </td>
                                                            <td>{{  date('d/m/Y', strtotime($fr->created_at)) }}</td>
                                                            <td class="text-nowrap">
                                                                <a href="{{URL::to('EditarSlide',array('id'=>$fr->id))}}" data-toggle="tooltip" data-original-title="Editar"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                                
                                                                @if($fr->state==1) <a href="{{URL::to('DesactivarSlide',array('id'=>$fr->id))}}" data-toggle="tooltip" data-original-title="Desactivar"> <i class="fa fa-circle-o text-inverse m-r-10"></i></a>
                                                                @else <a href="{{URL::to('ActivarSlide',array('id'=>$fr->id))}}" data-toggle="tooltip" data-original-title="Activar"> <i class="fa fa-circle text-inverse m-r-10"></i></a>
                                                                @endif
                                                                <a style="cursor: pointer;" data-toggle="tooltip" data-original-title="Eliminar" data-id="{{$fr->id}}" id="EliminarSlide"> <i class="fa fa-close text-danger"></i> </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                    </tbody>
                                </table>
                                    </div>
                                    </div>
                                     </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="VIDEO">
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="white-box">
                                            <form action="{{ URL::to('uploadvideo') }}" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                        <label class="col-sm-2 control-label input-sm">Subir Video:</label>
                                                        <div class="col-sm-10">
                                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                                <div class="form-control input-sm" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Seleccionar Archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                                <input type="file" name="file" id="file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                                        </div>
                                                        <!-- <input type="submit" value="Upload" name="submit" class="btn btn-success waves-effect waves-light m-r-10"> -->
                                                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label input-sm"></label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Guardar</button>
                                                        </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="white-box">
                                            <form action="{{ URL::to('uploadImagen') }}" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                        <label class="col-sm-2 control-label input-sm">Subir Imagen:</label>
                                                        <div class="col-sm-10">
                                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                                <div class="form-control input-sm" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Seleccionar Archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                                <input type="file" name="file" id="file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>
                                                        </div>
                                                        <!-- <input type="submit" value="Upload" name="submit" class="btn btn-success waves-effect waves-light m-r-10"> -->
                                                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label input-sm"></label>
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Guardar</button>
                                                        </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade" id="modalEliminarFrame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
            <h4>¿Está seguro que desea Eliminar El Frame?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" id="ElimiarFrameBtn" data-id="" href="">Elimiar</a>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEliminarSlide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
            <h4>¿Está seguro que desea Eliminar La imagen?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" id="ElimiarSlideBtn" data-id="" href="">Elimiar</a>
        </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
    $(document).on('click','#EliminarFrame',function(){
        var Frame_id_selected = $(this).attr('data-id');
        var link = '{{url('EliminarFrame')}}' + '/' + Frame_id_selected;
        $('#ElimiarFrameBtn').attr('data-id', Frame_id_selected);
        $('#ElimiarFrameBtn').attr('href', link);
        $('#modalEliminarFrame').modal();
    });

    $(document).on('click','#EliminarSlide',function(){
        var Slide_id_selected = $(this).attr('data-id');
        var link = '{{url('EliminarSlide')}}' + '/' + Slide_id_selected;
        $('#ElimiarSlideBtn').attr('data-id', Slide_id_selected);
        $('#ElimiarSlideBtn').attr('href', link);
        $('#modalEliminarSlide').modal();
    });


</script>

@endsection