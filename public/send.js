
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

function cargar() {
  let mostrarTodo = document.getElementById("mostrarTodo");
  $.ajax({
    url: "./functions/read.php",
    success: function(response) {
      console.log('La solicitud fue exitosa!');
      console.log(response);
      const data = JSON.parse(response);
      codigo='<ul class="list-group mb-0">';
      $.each(data, function(index, tarea) {
        console.log("ID: " + tarea.pkid + ", Nombre: " + tarea.nombre_tarea);
        codigo += '<li id="' + tarea.pkid + '" class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">'
        + '<div class="d-flex align-items-center"><input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />'+tarea.nombre_tarea+'</div>'
        + '<a href="#!" data-mdb-toggle="tooltip" title="Update item" onclick="update('+this.value+','+tarea.pkid+','+tarea.done+')"><i class="bi bi-pencil text-primary"></i></a>'
        + '<a href="#!" data-mdb-toggle="tooltip" title="Remove item"><i class="bi bi-x text-danger"></i></a>'
        + '</li>'

      });
      codigo += '</ul>';
      mostrarTodo.innerHTML=codigo;
    }
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
