$(document).ready(function(){
    $('#search').focus()
  
    $('#search').on('keyup', function(){
      var search = $('#search').val()
      $.ajax({
        type: 'POST',
        url: 'search.php',
        data: {'search': search},
        
      })
      .done(function(resultado){
        $('#result').html(resultado)
      })
      
    })
  })