# m8_ToDo

<!-- BB DD -->
CREATE DATABASE todo;

CREATE TABLE todo.tareas(
	pkid INT NOT NULL AUTO_INCREMENT,
	nombre_tarea VARCHAR(150),
	done boolean DEFAULT false,
	CONSTRAINT PRIMARY KEY (pkid)
);