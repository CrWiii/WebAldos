@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Eventos</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <!-- <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <!-- <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                <select class="form-control pull-right row b-none">
                                    <option>March 2017</option>
                                    <option>April 2017</option>
                                    <option>May 2017</option>
                                    <option>June 2017</option>
                                    <option>July 2017</option>
                                </select>
                            </div> -->
                            <h3 class="box-title">Lista de Eventos</h3>
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url('NuevoEvento')}}" class="btn btn-inverse waves-effect waves-light">Nuevo</a>
                                    <!-- <h2>March 2017</h2>
                                    <p>SALES REPORT</p> -->
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <!-- <h1 class="text-right text-info m-t-20">$3,690</h1> --> </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NOMBRE</th>
                                            <th>DESCRIPCIÓN</th>
                                            <th>ESTADO</th>
                                            <th>FECHA CREACIÓN</th>
                                            <th>ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Events as $Event)
                                        <tr>
                                            <td>{{$Event->id}}</td>
                                            <td>{{$Event->description}}</td>
                                            <td class="txt-oflo">{{str_limit($Event->content,30)}}</td>
                                            <td>{{$Event->Images->description}}</td>
                                            <td> <img src="{{ asset($Event->Images->route) }}" alt="" height="50"></td>
                                            <td>@if($Event->state==1)<span class="label label-success label-rouded">ACTIVO</span> @else <span class="label label-danger label-rouded">INACTIVO</span> @endif </td>
                                            <td class="txt-oflo">@if($Event->state==1)<span class="text-success">{{$Event->Type->description}}</span> @else <span class="text-danger">{{$Event->Type->description}}</span>@endif</td>
                                            <td>{{  date('d/m/Y', strtotime($Event->created_at)) }}</td>
                                            <td class="text-nowrap">
                                                <a href="{{URL::to('EditarEvento',array('id'=>$Event->id))}}" data-toggle="tooltip" data-original-title="Editar"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                @if($Event->state==1) <a href="{{URL::to('DesactivarEvento',array('id'=>$Event->id))}}" data-toggle="tooltip" data-original-title="Desactivar"> <i class="fa fa-circle-o text-inverse m-r-10"></i></a>
                                                @else <a href="{{URL::to('ActivarEvento',array('id'=>$Event->id))}}" data-toggle="tooltip" data-original-title="Activar"> <i class="fa fa-circle text-inverse m-r-10"></i></a>
                                                @endif
                                                <a data-toggle="tooltip" data-original-title="Eliminar" data-id="{{$Event->id}}" id="EliminarEvento"> <i class="fa fa-close text-danger"></i> </a>
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

<div class="modal fade" id="modalEliminarEvento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
            <h4>¿Está seguro que desea Eliminar El Evento?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" id="ElimiarBtn" data-id="" href="">Elimiar</a>
        </div>
        </div>
    </div>
</div>

            <!-- EliminarEvento -->
@endsection

@section('script')

<script type="text/javascript">
    $(document).on('click','#EliminarEvento',function(){
        var Evento_id_selected = $(this).attr('data-id');
        var link = '{{url('EliminarEvento')}}' + '/' + Evento_id_selected;
        $('#ElimiarBtn').attr('data-id', Evento_id_selected);
        $('#ElimiarBtn').attr('href', link);
        $('#modalEliminarEvento').modal();
    });

DesactivarEvento
</script>

@endsection