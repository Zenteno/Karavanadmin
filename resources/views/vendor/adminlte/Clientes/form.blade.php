
<div class="row ">
<div class=" col-lg-12">
	<div class="form-group  ">
		{{ Form::label('nombres',' Nombres') }}
		{{ Form::text('nombres',null,['class' =>'form-control',
			'placeholder' =>'Anais Alejandra',
			'required']) }}
	</div>
</div>


<div class=" col-lg-6">
	<div class="form-group ">
		{{ Form::label('apellido_p','Apellido paterno') }}
		{{ Form::text('apellido_p',null,['class' => 'form-control', 'placeholder'=> 'Fuentes', 'required']) }}
	</div>
</div>
<div class=" col-lg-6">
	<div class="form-group ">
		{{ Form::label('apellido_m','Apellido materno') }}
		{{ Form::text('apellido_m',null,['class' => 'form-control', 'placeholder'=> 'Espinoza', 'required']) }}
	</div>

</div>
</div>