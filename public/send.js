
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

function update(nombre, id, done){ 

    // Filtrar datos 

    $.ajax({
      url: './functions/update.php',
      method: 'POST',
      data: {nombre: nombre, id: id, done: done},
      success: function(response) {
        console.log('La solicitud fue exitosa!');
      },
    });

}
