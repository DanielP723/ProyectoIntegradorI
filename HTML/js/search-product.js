$(buscar_datos());

function buscar_datos(consulta){
  $.ajax({
    url: 'searchproduct.php',
    type: 'POST',
    dataType: 'html',
    data:{consulta: consulta},
  })
  .done(function(respuesta){
    $("#tableProducts").html(respuesta);
  })
  .fail(function(){
    console.log("error");
  })
}


$(document).on('keyup','#searchProduct',function(){
  var valor = $(this).val();
  if(valor != ""){
    buscar_datos(valor);
  }else{
    buscar_datos();
  }
});