@extends('adminlte::layouts.app')
 
@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')


<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-md-4">
			<!-- Default box -->
			<div class="box box-primary">
				<div class="box-header with-border text-center">
					<h3 class="box-title">
						Agregar nuevos clientes
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
					{{Form::Open(['route' => 'clientes.store', 'method'=>'POST'])}}
					@include('adminlte::Clientes.form')
					<div class="row text-center">
						<div class="col-sm-8 offset-sm-2 col-lg-12 offset-lg-3 col-xl-8 offset-xl-4 ">
							<button class="btn btn-primary" type="submit">
							Agregar Cliente
							</button>
						</div>
					</div>
					{{Form::close()}}
				</div>
			</div>
			<!-- /.box -->
		</div>
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">
						Clientes
					</h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-toggle="tooltip" data-widget="collapse" title="Collapse" type="button">
						<i class="fa fa-minus">
						</i>
						</button>
					</div>
				</div>
				<div class="box-body">
					<h5>
						<div class="form-group">
							<label>Selecciona</label>
							<select class="form-control" id="clientes">
								<option value="-1"></option>
								@foreach ($clientes as $cliente)
								<option value="{{ $cliente->id }}">{{ $cliente->nombres }} {{ $cliente->apellido_p }}</option>
								@endforeach
							</select>
						</div>
					</h5>
					<div class="row">
						<div class="col-xs-6">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Pantallas</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
									<table class="table table-hover" id="pantallas">
										<thead>
											<tr>
												<th>MAC</th>
												<th>Estado</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<div class="col-xs-6">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Canales</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
									<table class="table table-hover" id="canales">
										<thead>
											<tr>
												<th>Canal</th>
												<th>Estado</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
		</div>
	</div>
</div>


@endsection
