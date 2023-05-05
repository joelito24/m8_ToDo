
function create(nombre_evento){ 

    // Filtrar datos

    var data = nombre_evento; 

    $.ajax({
      url: './functions/create.php',
      method: 'POST',
      data: {nombre: data},
      success: function(response) {
        console.log('La solicitud fue exitosa!');
      },
    });

}