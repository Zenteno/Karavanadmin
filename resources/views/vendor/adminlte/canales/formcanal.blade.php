<div class="row">

<div class=" col-lg-12">
	<div class="form-group  ">
		{{ Form::label('cn_id',' canal') }}
		{{ Form::select('cn_id',$canales,null,['class' =>'chosen-select',
			'placeholder' =>' ',
			'required']) }}
	</div>
</div>

<div class=" col-lg-6">
	<div class="form-group  ">
		{{ Form::label('cl_id',' cliente') }}
		{{ Form::select('cl_id',$clientes,null,['class' =>'chosen-select',
			'placeholder' =>' ',
			'required','id'=>'cliente']) }}
	</div>
</div>
<div class=" col-lg-6">
	<div class="form-group  ">
		{{ Form::label('cn_id',' Pantalla') }}
		{{ Form::select('cn_id',$pantallas,null,['class' =>'chosen-select',
			'placeholder' =>' ',
			'required','id'=>'pantalla']) }}
	</div>
</div>

</div>