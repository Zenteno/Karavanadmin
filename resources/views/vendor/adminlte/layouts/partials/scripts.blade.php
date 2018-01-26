<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<script src="{{ asset('recursos/chosen/chosen.js')}}"></script>
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
					estado = (data[i]["cl_estado_de_activacion"]==1)?true:false;
					string = `<button type="button" class="btn btn-`+((estado)?'success':'danger')+` btn-sm">
								<i class="fa fa-fw fa-`+((estado)?'check':'close')+`"></i>
							</button>`;
					cadena+=`<tr>
								<td>`+data[i]["sn_mac"]+`</td>
								<td>`+string+`</td>
							</tr>`
				}
				$("#pantallas tbody").html(cadena);
			}
		)
	});
</script>
