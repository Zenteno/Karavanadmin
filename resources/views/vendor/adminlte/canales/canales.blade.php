@extends('adminlte::layouts.app')
 
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-6">
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">
                        Agregar nueva Canal
                    </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
                            <i class="fa fa-minus">
                            </i>
                        </button>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-body">
                    {{Form::Open(['route' => 'canales.store', 'method'=>'POST'])}}
                   @include('adminlte::canales.form')
                    <div class="row text-center">
                        <div class="col-sm-8 offset-sm-2 col-lg-12 offset-lg-3 col-xl-8 offset-xl-4 ">
                            <button class="btn btn-primary" type="submit">
                                Agregar canal
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Canales
                    </h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
                            <i class="fa fa-minus">
                            </i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
{{Form::Open(['route' => 'canales.guardar', 'method'=>'POST'])}}
@include('adminlte::canales.formcanal')

                    <div class="row text-center">
                        <div class="col-sm-8 offset-sm-2 col-lg-12 offset-lg-3 col-xl-8 offset-xl-4 ">
                            <button class="btn btn-primary" type="submit">
                                Agregar Canal a cliente
                            </button>
                        </div>
                    </div>
{{Form::close()}}
                </div>
            </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(".chosen-select").chosen({no_results_text: "No se ha podido localizar",   placeholder_text_single: "Seleccione un cliente"});
</script>
<script src="{{ asset('js/clientePantalla.js') }}"></script>
@endsection
