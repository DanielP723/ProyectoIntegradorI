$(buscar_datos());

function buscar_datos(consulta){
  $.ajax({
    url: 'searchclient.php',
    type: 'POST',
    dataType: 'html',
    data:{consulta: consulta},
  })
  .done(function(respuesta){
    $("#tableClient").html(respuesta);
  })
  .fail(function(){
    console.log("error");
  })
}


$(document).on('keyup','#searchClient',function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos(valor);
  }else{
    buscar_datos();
  }
});