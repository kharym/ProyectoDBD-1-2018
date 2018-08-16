/* Script SQL ProyectoDBD */

/*--------------------------------------------------------*/

/* Tabla proveedorAutos */

CREATE TABLE proveedorAutos(
	id int NOT NULL AUTO INCREMENT,
	nombreProveedorAuto varchar(50) NOT NULL,
	telefono varchar(15) NOT NULL,
	correo varchar(30) NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla proveedorTraslados */

CREATE TABLE proveedorTraslados(
	id int NOT NULL AUTO INCREMENT,
	nombreProveedorTraslado varchar(50) NOT NULL,
	telefono varchar(15) NOT NULL,
	correo varchar(30) NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla paquetes */

CREATE TABLE paquetes(
	id int NOT NULL AUTO INCREMENT,
	precioDescuento int NOT NULL,
	tipoPaquete int NOT NULL,
	precioNormal int NOT NULL,
	descripcion varchar(150) NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla aerolineas */

CREATE TABLE aerolineas(
	id int NOT NULL AUTO INCREMENT,
	nombreAerolinea varchar(50) NOT NULL,
	tipoAerolinea int NOT NULL,
	calificacion int,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla ubicaciones */

CREATE TABLE ubicaciones(
	id int NOT NULL AUTO INCREMENT,
	latitud varchar(15) NOT NULL,
	longitud varchar(15) NOT NULL,
	cuidad varchar(100) NOT NULL,
	pais varchar(100) NOT NULL,
	calleUbicacion varchar(50) NOT NULL,
	numeroUbicacion int NOT NULL,
	codigoPostal int NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla historialusers */

CREATE TABLE historialusers(
	id int NOT NULL AUTO INCREMENT,
	descripcion varchar(150) NOT NULL,
	fechaHistorial date NOT NULL,
	horaHistorial time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla rols */

CREATE TABLE rols(
	id int NOT NULL AUTO INCREMENT,
	nombreRol varchar(10) NOT NULL,
	descripcion varchar(150) NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla users */

CREATE TABLE users(
	id int NOT NULL AUTO INCREMENT,
	historialuser_id int NOT NULL,
	rols_id int NOT NULL,
	name varchar(30) NOT NULL,
	email varchar(50) NOT NULL,
	password varchar(10) NOT NULL,
	dni_Pasaporte int NOT NULL,
	fondos int NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla compras */

CREATE TABLE compras(
	id int NOT NULL AUTO INCREMENT,
	user_id int NOT NULL,
	descripcion varchar(150) NOT NULL,
	monto int NOT NULL,
	fechaCompra date NOT NULL,
	horaCompra time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla autos */

CREATE TABLE autos(
	id int NOT NULL AUTO INCREMENT,
	compra_id int NOT NULL,
	proveedor_auto_id int NOT NULL,
	patente varchar(10) NOT NULL,
	precio int NOT NULL,
	marca varchar(15) NOT NULL,
	modelo varchar(20) NOT NULL,
	fechaArriendo date NOT NULL,
	horaArriendo time NOT NULL,
	fechaDevolucion date NOT NULL,
	horaDevolucion time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla actividads */

CREATE TABLE actividads(
	id int NOT NULL AUTO INCREMENT,
	compra_id int NOT NULL,
	nombreActividad varchar(50),
	precioActividad int NOT NULL,
	descripcion varchar(250) NOT NULL,
	numeroNinos int NOT NULL,
	numeroAdultos int NOT NULL,
	fechaInicio date NOT NULL,
	horaInicio time NOT NULL,
	fechaTermino date NOT NULL,
	horaTermino time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla historialCompras */

CREATE TABLE historialCompras(
	id int NOT NULL AUTO INCREMENT,
	compra_id int NOT NULL,
	fechaCompra date NOT NULL,
	horaCompra time NOT NULL,
	tipoCompra int NOT NULL,
	metodoDePago int NOT NULL,
	monto int NOT NULL,
	descripcion varchar(200), NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla alojamientos */

CREATE TABLE alojamientos(
	id int NOT NULL AUTO INCREMENT,
	ubicacion_id int NOT NULL,
	nombreAlojamiento varchar(20),
	calificacion int, 
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla habitaciones */

CREATE TABLE habitaciones(
	id int NOT NULL AUTO INCREMENT,
	compra_id int NOT NULL,
	alojamiento_id int NOT NULL,
	precioHabitacion int NOT NULL,
	calificacion int,
	numeroAdultos int NOT NULL,
	numeroNinos int NOT NULL,
	tipoHabitacion int NOT NULL,
	fechaIngreso date NOT NULL,
	horaIngreso time NOT NULL,
	fechaSalida date NOT NULL,
	horaSalida time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla traslados */

CREATE TABLE traslados(
	id int NOT NULL AUTO INCREMENT,
	compra_id int NOT NULL,
	preoveedor_traslado_id int NOT NULL,
	ubicacion_id int NOT NULL,
	precioTraslado int NOT NULL,
	planificacionParadas varchar(200) NOT NULL,
	numeroParadas int NOT NULL,
	totalPasajeros int NOT NULL,
	fechaTraslado date NOT NULL,
	horaTraslado time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla aeropuertos */

CREATE TABLE aeropuertos(
	id int NOT NULL AUTO INCREMENT,
	ubicacion_id int NOT NULL,
	nombreAeropuerto varchar(50) NOT NULL,
	tipoAeropuerto int NOT NULL,
	calificacion int,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla vuelos */

CREATE TABLE vuelos(
	id int NOT NULL AUTO INCREMENT,
	compra_id int NOT NULL,
	aerolinea_id int NOT NULL,
	aeropuertoOrigen_id int NOT NULL,
	aeropuertoDestino_id int NOT NULL,
	tipoVuelo int NOT NULL,
	precioVuelo int NOT NULL,
	numeroEscala int NOT NULL,
	cantidadEquipaje int NOT NULL,
	fechaPartida date NOT NULL,
	horaPartida time NOT NULL,
	fechaRegreso date NOT NULL,
	horaRegreso time NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/* Tabla asientos TIENE FORANEA   */

CREATE TABLE asientos(
	id int NOT NULL AUTO INCREMENT,
	vuelo_id int NOT NULL,
	disponibilidad boolean NOT NULL,
	numeroAsiento int NOT NULL,
	tipoAsiento int NOT NULL,
	PRIMARY KEY (id)
);

/*--------------------------------------------------------*/

/*------DEFINICION DE LLAVES FORANEAS---------------*/

ALTER TABLE users
	ADD FOREIGN KEY (historialuser_id) REFERENCES historialusers(id);
	ADD FOREIGN KEY (rols_id) REFERENCES historialusers(id);


ALTER TABLE compras
	ADD FOREIGN KEY (user_id) REFERENCES users(id);


ALTER TABLE autos
	ADD FOREIGN KEY (compra_id) REFERENCES compras(id);
	ADD FOREIGN KEY (proveedor_auto_id) REFERENCES proveedorAutos(id);


ALTER TABLE actividads
	ADD FOREIGN KEY (compra_id) REFERENCES compras(id);


ALTER TABLE historialCompras
	ADD FOREIGN KEY (compra_id) REFERENCES compras(id);


ALTER TABLE alojamientos
	ADD FOREIGN KEY (ubicacion_id) REFERENCES ubicaciones(id);


ALTER TABLE habitaciones
	ADD FOREIGN KEY (compra_id) REFERENCES compras(id);
	ADD FOREIGN KEY (alojamiento_id) REFERENCES alojamientos(id);


ALTER TABLE traslados
	ADD FOREIGN KEY (compra_id) REFERENCES compras(id);
	ADD FOREIGN KEY (proveedor_traslado_id) REFERENCES proveedorTraslados(id);
	ADD FOREIGN KEY (ubicacion_id) REFERENCES ubicaciones(id);


ALTER TABLE aeropuertos
	ADD FOREIGN KEY (ubicacion_id) REFERENCES ubicaciones(id);


ALTER TABLE vuelos
	ADD FOREIGN KEY (compra_id) REFERENCES compras(id);
	ADD FOREIGN KEY (aerolinea_id) REFERENCES aerolineas(id);
	ADD FOREIGN KEY (aeropuertoOrigen_id) REFERENCES aeropuertos(id);
	ADD FOREIGN KEY (aeropuertoDestino_id) REFERENCES aeropuertos(id);


ALTER TABLE asientos
	ADD FOREIGN KEY (vuelo_id) REFERENCES vuelos(id);

/*--------------------------------------------------------*/