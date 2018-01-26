<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<script src="{{ asset('recursos/chosen/chosen.js')}}"></script>
<script src="{{ asset('recursos/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('recursos/select2/select2.js')}}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.

      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script type="text/javascript">
	
	$("#clientes").change(function(e){
		$.get('/cliente/'+$(e.currentTarget).val()+"/pantallas",
			function(data){
				
				
				cadena = "";
				for(var i in data){
					estado = (data[i]["estado_de_activacion"]==1)?true:false;
					toggle = `
						<label class="switch" style="margin-bottom: 0px;">
							<input type="checkbox" `+((estado)?'checked=""':'')+`>
							<span class="slider round"></span>
						</label>
					`;
					cadena+=`<tr>
								<td>`+data[i]["sn_mac"]+`</td>
								<td>`+toggle+`</td>
								<td><a href="pantallas/`+data[i]["id"]+`"><i class="fa fa-edit"></i> Editar</a></td>
							</tr>`
				}
				$("#pantallas tbody").html(cadena);
				$('.select2').select2();
			}
		)
	});
	$('.select2').select2();
</script>
