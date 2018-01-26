
<div class="row ">
<div class=" col-lg-6">
	<div class="form-group ">
		{{ Form::label('cn_nombre','Ingrese nombre') }}
		{{ Form::text('cn_nombre',null,['class' => 'form-control', 'placeholder'=> 'nombre', 'required']) }}
	</div>
</div>
<div class=" col-lg-6">
	<div class="form-group ">
		{{ Form::label('cn_url','Ingrese url') }}
		{{ Form::text('cn_url',null,['class' => 'form-control', 'placeholder'=> 'url', 'required']) }}
	</div>
</div>

</div>
<div class="row">
	<div class=" col-lg-12">
	<div class="form-group ">
		{{ Form::label('cn_descripcion','Descripcion') }}
		{{ Form::textarea('cn_descripcion',null,['class' => 'form-control', 'placeholder'=> '...', 'required','maxlength'=>'300']) }}
	</div>
</div>
</div>