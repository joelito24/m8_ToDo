
function create(nombre_evento){ 

  var data = nombre_evento; 

  $.ajax({
    url: './functions/create.php',
    method: 'POST',
    data: {nombre: data},
    success: function(response) {
    },
  });

}

function cargar() {
  let mostrarTodo = document.getElementById("mostrarTodo");
  $.ajax({
    url: "./functions/read.php",
    success: function(response) {
      const data = JSON.parse(response);
      codigo='<ul class="list-group mb-0">';
      $.each(data, function(index, tarea) {
        console.log("ID: " + tarea.pkid + ", Nombre: " + tarea.nombre_tarea);
        codigo += '<li class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">'
        + '<div class="d-flex align-items-center">'
        +   '<input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />'
        +   '<input id="'+tarea.pkid+'" value="'+tarea.nombre_tarea+'"/>'
        +   '<a href="#!" data-mdb-toggle="tooltip" title="Update item" onclick="update(this.parentNode)">'
        +     '<i class="bi bi-pencil text-primary"></i>'
        +   '</a>'
        +   '<a href="#!" data-mdb-toggle="tooltip" title="Remove item" onclick="eliminar('+tarea.pkid+')">'
        +     '<i class="bi bi-x text-danger"></i>'
        +   '</a>'
        + '</div>'
        + '</li>'

      });
      codigo += '</ul>';
      mostrarTodo.innerHTML=codigo;
    }
  });
}


function update(object){ 

  console.log(object);
  var id = object.children[1].id;
  var nombre = object.children[1].value;
  var done = object.children[0].checked;

  if(done){
    done = 1;
  }else{
    done = 0;
  }

  $.ajax({
    url: './functions/update.php',
    method: 'POST',
    data: {id: id, nombre: nombre, done: done},
    success: function(response) {
      location.reload();
    },
  });
}

function eliminar(id){
  
      var data = id; 
  
      $.ajax({
        url: './functions/delete.php',
        method: 'POST',
        data: {id: data},
        success: function(response) {
          location.reload();
        },
      });
}
