@extends('admin.layout')

@section('content')
<style type="text/css">
    a.boxclose{
        float:right;
        width:26px;
        height:26px;
        background:transparent url(http://tympanus.net/Tutorials/CSSOverlay/images/cancel.png) repeat top left;
/*        margin-top: 10px;
        margin-right: 20px;
        margin-left: -15px;*/
        cursor:pointer;
    }
    .img-responsiven{
        display: block;
        max-width: 100%;
    }
</style>
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Editar Evento</h4> </div>
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
                                    <form class="form-horizontal" role="form" method="POST" action="/ActualizarEvento/{{$Eventt->id}}" enctype="multipart/form-data" file="true">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$Eventt->id}}">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Titulo:</label>
                                        <div class="col-md-10">
                                            <input type="text" id="description" name="description" class="form-control input-sm" placeholder="" value="{{$Eventt['description']}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Descrición:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control input-sm" rows="5" id="content" name="content">{{$Eventt['content']}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Subir Nuevas Fotos:</label>
                                        <div class="col-md-10">
                                            <div class="control-group">
                                              <div class="controls">
                                                <input type="file" name="images[]" multiple>
                                             </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label input-sm">Editar Fotos:</label>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label class="col-md-2 control-label input-sm">Fotos:</label> -->
                                        <div class="col-md-12">
                                        <ol id="sortable1" class="connectedSortable">
                                            @foreach($Eventt->Images as $Imagen)
                                            <div class="col-md-3" style="margin-bottom: 1%">
                                                <li id="ImgList" data-id="{{$Imagen->id}}" style="border: 1px solid #ddd;border-radius: 4px;">
                                                    <a id="linkDeteleImagen" data-id="{{$Imagen->id}}" style="cursor: pointer;float: right;"><i class="fa fa-times-circle-o" style="color: #000000;font-size: 1.5em;"></i></a>
                                                    <center><img src="{{ asset($Imagen->route) }}" alt="" class="responsive img-responsiven thumbnail" height="50" id="ImgList" data-id="{{$Imagen->id}}"></center>
                                                </li>
                                            </div>
                                            @endforeach
                                        </ol>


                                        </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label input-sm"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Actualizar</button>
                                            <a href="{{url('Eventos')}}" class="btn btn-inverse waves-effect waves-light"   >Cancelar</a>
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

<div class="modal fade" id="modalEliminarImagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <div class="modal-body">
            <h4>¿Está seguro que desea Eliminar La Imagen?</h4>
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
<script>
    $(document).on('click','#linkDeteleImagen',function(){
        var img_id_selected = $(this).attr('data-id');
        var link = '{{url('EliminarImagen')}}' + '/' + img_id_selected;
        $('#ElimiarBtn').attr('data-id', img_id_selected);
        $('#ElimiarBtn').attr('href', link);
        $('#modalEliminarImagen').modal();
    });

    var img_order_list = [];
    var img_id = 0;
    // data = $("#sortable1").find( "li" ).attr('id','ImgList');
    // $("#sortable1").each(function(i){
    //     img_id = $(this).children("li").attr('data-id');
    //     // console.log(img_id);
    //     img_order_list.push(img_id);
    //     // $(this).children('li').each(function(j,el){
    //     //     img_order_list[i].data.push($(el).attr('data-id'));
    //     // });
    // });
    // console.log(img_order_list);

</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    // $(document).on('click','#ImgList',function(){
    //     alert('testing');
    // });


    $( function() {
        $( "#sortable1" ).sortable({
            connectWith: ".connectedSortable"
        }).disableSelection();
    });
</script>
@endsection