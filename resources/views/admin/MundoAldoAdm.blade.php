@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">El Mundo de Aldo</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Lista de Frames</h3>
                            <div class="row sales-report">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url('NuevoFrame')}}" class="btn btn-inverse waves-effect waves-light">Nuevo</a>
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