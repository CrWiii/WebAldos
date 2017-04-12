@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Novios</h4> </div>
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
                            <h3 class="box-title">Lista de Productos > Novios</h3>
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url('NuevoProducto/2')}}" class="btn btn-inverse waves-effect waves-light">Nuevo</a>
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
                                            <th>NOMBRE IMAGEN</th>
                                            <th>IMAGEN</th>
                                            <th>ESTADO</th>
                                            <th>TIPO</th>
                                            <th>FECHA CREACIÓN</th>
                                            <th>ACCIÓN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($ProductNovios as $PN)
                                        <tr>
                                            <td>{{$PN->id}}</td>
                                            <td>{{$PN->name}}</td>
                                            <td class="txt-oflo">{{str_limit($PN->description,30)}}</td>
                                            <td>{{$PN->Images->description}}</td>
                                            <td> <img src="{{ asset($PN->Images->route) }}" alt="" height="50"></td>
                                            <td>@if($PN->state==1)<span class="label label-success label-rouded">ACTIVO</span> @else <span class="label label-danger label-rouded">INACTIVO</span> @endif </td>
                                            <td class="txt-oflo">@if($PN->state==1)<span class="text-success">{{$PN->Type->description}}</span> @else <span class="text-danger">{{$PN->Type->description}}</span>@endif</td>
                                            <td>{{  date('d/m/Y', strtotime($PN->created_at)) }}</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Editar" data-id="{{$PN->id}}"> <i class="fa fa-pencil text-inverse m-r-10"></i></a>
                                                @if($PN->state==1) <a href="{{URL::to('DesactivarProducto',array('id'=>$PN->id))}}" data-toggle="tooltip" data-original-title="Desactivar"> <i class="fa fa-circle-o text-inverse m-r-10"></i></a>
                                                @else <a href="{{URL::to('ActivarProducto',array('id'=>$PN->id))}}" data-toggle="tooltip" data-original-title="Activar"> <i class="fa fa-circle text-inverse m-r-10"></i></a>
                                                @endif
                                                <a data-toggle="tooltip" data-original-title="Eliminar" data-id="{{$PN->id}}" id="EliminarProducto"> <i class="fa fa-close text-danger"></i> </a>
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

<div class="modal fade" id="modalEliminarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
            <h4>¿Está seguro que desea Eliminar El Producto?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
            <a class="btn btn-danger" id="ElimiarBtn" data-id="" href="">Elimiar</a>
        </div>
        </div>
    </div>
</div>

            <!-- EliminarProducto -->
@endsection

@section('script')

<script type="text/javascript">
    $(document).on('click','#EliminarProducto',function(){
        var producto_id_selected = $(this).attr('data-id');
        var link = '{{url('EliminarProducto')}}' + '/' + producto_id_selected;
        $('#ElimiarBtn').attr('data-id', producto_id_selected);
        $('#ElimiarBtn').attr('href', link);
        $('#modalEliminarProducto').modal();
    });

DesactivarProducto
</script>

@endsection