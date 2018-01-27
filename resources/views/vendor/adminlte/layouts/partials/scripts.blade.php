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
				pantallas  = data.pantallas;
				canales = data.canales;

				cadena = "";
				for(var i in pantallas){
					estado = (pantallas[i]["estado_de_activacion"]==1)?true:false;
					toggle = `
						<label class="switch" style="margin-bottom: 0px;">
							<input type="checkbox" `+((estado)?'checked=""':'')+`>
							<span class="slider round"></span>
						</label>
					`;
					cadena+=`<tr>
								<td>`+pantallas[i]["sn_mac"]+`</td>
								<td>`+toggle+`</td>
								<td><a href="pantallas/`+pantallas[i]["id"]+`"><i class="fa fa-edit"></i> Editar</a></td>
							</tr>`
				}
				$("#pantallas tbody").html(cadena);
				cadena = "";
				for(var i in canales){
					estado = (canales[i]["habilitado"]?' selected':'')
					cadena+='<option value="'+canales[i].id+'"'+estado+'>'+canales[i].cn_nombre+'</option>';
				}
				$("#canales").html(cadena);
				$('.select2').select2();
			}
		).fail(function() {
    		$("#canales").html("");
			$("#pantallas tbody").html("");
				
  		})
	});
	$('.select2').select2();
	function guardar(){
		$.ajaxSetup({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
		var cliente = $("#clientes option:selected").val();
		var canales = $("#canales option:selected");
		var ch = [];
		canales.each(function() {
			ch.push(parseInt($(this).val()));
    	});
    	$.post('/cliente/'+cliente+'/asignar',{
			canales : ch
		},function(data){

		});
		
	}


</script>
