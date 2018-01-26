$(function(){
  $(".chosen-select").chosen({
  		 placeholder_text_single: "Esperando selección...",
  		 disable_search_threshold: 1,
  		 no_results_text: "No hay resultados",
  		 width: "100%"
   });

  limpiarPantallas();

  var selectCliente     = $('select#cliente');
  var selectPantalla = $('select#pantalla');

  function limpiarPantallas(){
    $('select#pantalla').find('option').remove();
    $('select#pantalla').trigger("chosen:updated");
  }

  selectCliente.on('change',function(){
    var id     = selectCliente.val();
    var uri    = 'http://127.0.0.1:8000/' + id + '/getPantallas';
    var method = 'GET';

    $.ajax({
        'url'    : uri,
        'type'   : method,
        'success': function(data){
          selectPantalla.find('option').remove();
          $.each(data,function(indice,valor){
            selectPantalla.append('<option value="' + valor['id'] + '">'+ valor['sn_mac'] +'</option>');
            selectPantalla.trigger("chosen:updated");
          });
        },'error':function(jqXHR,mensaje,error){
          alertify.error('Hay problemas con la conexión a internet.');
        },timeout:15000
    }); // .Ajax
  });
});// Onload
