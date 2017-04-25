@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4 class="page-title">Frame  {{$frame->title}}</h4> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Lista de Subframes</h3>
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url('NuevoSubFrame',array($frame->id))}}" class="btn btn-inverse waves-effect waves-light">Nuevo</a>
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
                                    @foreach($subframes as $subframe)
                                        <tr>
                                            <td>{{$subframe->id}}</td>
                                            <td>{{$subframe->title}}</td>
                                            <td>{{str_limit($subframe->content,20)}}</td>
                                            <td> <img src="{{ asset($subframe->Images->route) }}" alt="" height="50"></td>
                                            <td>
                                            @if($subframe->state==1)<span class="label label-success label-rouded">ACTIVO</span>
                                            @else<span class="label label-danger label-rouded">INACTIVO</span>
                                            @endif
                                            </td>
                                            <td>{{  date('d/m/Y', strtotime($subframe->created_at)) }}</td>
                                            <td class="text-nowrap">
                                                <a href="{{URL::to('EditarSubFrame',array('id'=>$subframe->id))}}" data-toggle="tooltip" data-original-title="Editar"> 
                                                    <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                </a>
                                                @if($subframe->state==1)
                                                <a href="{{URL::to('DesactivarSubFrame',array('id'=>$subframe->id))}}" data-toggle="tooltip" data-original-title="Desactivar">
                                                    <i class="fa fa-circle-o text-inverse m-r-10"></i>
                                                </a>
                                                @else 
                                                <a href="{{URL::to('ActivarSubFrame',array('id'=>$subframe->id))}}" data-toggle="tooltip" data-original-title="Activar">
                                                    <i class="fa fa-circle text-inverse m-r-10"></i>
                                                </a>
                                                @endif
                                                <a style="cursor: pointer;" data-toggle="tooltip" data-original-title="Eliminar" data-id="{{$subframe->id}}" id="EliminarSubFrame">
                                                    <i class="fa fa-close text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="modal fade" id="modalEliminarSubFrame" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
            <h4>¿Está seguro que desea Eliminar El SubFrame?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" id="ElimiarBtn" data-id="" href="">Elimiar</a>
        </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script type="text/javascript">
    $(document).on('click','#EliminarSubFrame',function(){
        var Subframe_id_selected = $(this).attr('data-id');
        var link = '{{url('EliminarSubFrame')}}' + '/' + Subframe_id_selected;
        $('#ElimiarBtn').attr('data-id', Subframe_id_selected);
        $('#ElimiarBtn').attr('href', link);
        $('#modalEliminarSubFrame').modal();
    });

DesactivarEvento
</script>

@endsection