
<div class="row ">
<div class=" col-lg-12">
	<div class="form-group  ">
		{{ Form::label('cl_id',' Cliente') }}
		{{ Form::select('cl_id',$clientes,null,['class' =>'chosen-select',
			'placeholder' =>' ',
			'required']) }}
	</div>
</div>


<div class=" col-lg-12">
	<div class="form-group ">
		{{ Form::label('mac','Ingrese mac') }}
		{{ Form::text('mac',null,['class' => 'form-control', 'placeholder'=> '...', 'required']) }}
	</div>
</div>
</div>
