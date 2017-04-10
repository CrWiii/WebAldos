@extends('admin.layout')

@section('content')
<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Editar Producto</h4> </div>
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
                                <div class="col-sm-6 col-xs-12">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="state-success">Success</label>
                                            <div class="col-md-6">
                                                <input type="text" id="state-success" name="state-success" class="form-control" placeholder="..."> </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <form role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="example-input-small">Small</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="example-input-normal">Normal</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="example-input-large">Large</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Grid Sizes</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder=".col-sm-4"> </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5 col-sm-offset-3">
                                                <input type="text" class="form-control" placeholder=".col-sm-5"> </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="text" class="form-control" placeholder=".col-sm-6"> </div>
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