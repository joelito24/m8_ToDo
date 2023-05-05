
function create(datos){ 

    // Filtrar datos

    var data = datos; 
    $.ajax({
        url: "./functions/create.php",
        context: data
      }).done(function() {

      });

}