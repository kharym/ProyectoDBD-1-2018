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
/*INSERTS*/

INSERT INTO proveedorAutos VALUES ('susBuenosAutos','+56266677769', 'susBuenosAutos@yahoo.com');
INSERT INTO proveedorAutos VALUES ('autosChallas',  '+56512457356', 'autosChallas@yahoo.com');

INSERT INTO proveedorTraslados VALUES ('susBuenosTraslados',  '+56236635769', 'susBuenosTraslados@yahoo.com');
INSERT INTO proveedorTraslados VALUES ('trasladosChallas',  '+56564579021', 'trasladosChallas@gmail.com');

INSERT INTO paquetes VALUES (10000,  2, 20000,'Paquete de tipo vuelo+ alojamiento. Descuento del 50% al comprar el pack');
INSERT INTO paquetes VALUES (15000,  1, 20000,'Paquete de tipo vuelo+ auto. Descuento del 25% al comprar el pack');

INSERT INTO aerolineas VALUES ('susBuenosViajes',  2, 4);
INSERT INTO aerolineas VALUES ('viajesChallas',  1 , 2);

INSERT INTO ubicaciones VALUES ('123416749,12345',  '123413569,13245', 'Santiago', 'Chile', 'calle falsa', 123, 17910);
INSERT INTO ubicaciones VALUES ('468416749,57845',  '314513569,13135', 'Cordova', 'Argentina', 'calle verdadera', 323, 27140);

INSERT INTO historialusers VALUES ('Usuario ingresa a su cuenta',  DATE'19/01/2017', CAST ('12:05:06.0000000' AS TIME));
INSERT INTO historialusers VALUES ('Usuario accede a sus reservas',  DATE'11/09/2016', CAST ('22:24:26.0000000' AS TIME));

INSERT INTO rols VALUES ('administrador',  'Usuario con permisos maximos, capaz de realizar la mayoria de las acciones');
INSERT INTO rols VALUES ('comprador',  'Usuario con capaz de realizar compras y reservas de los distintos productos');

INSERT INTO users VALUES (2,  2, 'jorjito','jorjito@gmail.cl', 'sadfw"#$%&', 21314, 20000);
INSERT INTO users VALUES (3,  1, 'peluca','elPeluca@gmail.cl', 's#$%&/G"#$%&', 46514, 30000);

INSERT INTO compras VALUES (2,  'compra de vuelo', 20000, DATE'26/11/2012', CAST ('20:05:06.0000000' AS TIME));
INSERT INTO compras VALUES (4,  'compra de reserva habitacion', 10000, DATE'09/09/2017', CAST ('06:12:13.0000000' AS TIME));

INSERT INTO autos VALUES (2,3,'PS2476', 20000, 'Nissan', 'Versa', DATE'26/01/2012', CAST ('20:05:06.0000000' AS TIME),DATE'28/11/2012', CAST ('20:05:06.0000000') AS TIME));
INSERT INTO autos VALUES (3,2,'SK2676', 18000, 'Chevrolet', 'Spark', DATE'26/01/2012', CAST ('20:05:06.0000000' AS TIME),DATE'28/11/2012', CAST ('20:05:06.0000000' AS TIME));

INSERT INTO actividads VALUES (1,'tour zologico', 12000, '+Tour a traves del zoologico de santiago',2 , 4,DATE'26/01/2012', CAST ('20:05:06.0000000' AS TIME),DATE'28/12/2012', CAST ('20:05:06.0000000' AS TIME));
INSERT INTO actividads VALUES (1,'tour zologico', 12000, '+Tour a traves del zoologico de santiago',2 , 4,DATE'10/12/2012', CAST ('22:05:06.0000000' AS TIME),DATE'14/12/2012', CAST ('22:05:06.0000000' AS TIME));

INSERT INTO historialCompras VALUES (2,DATE'19/01/2017', CAST ('12:05:06.0000000' AS TIME), 2, 1, 19890, 'Compra de un pasaje de vuelo');
INSERT INTO historialCompras VALUES (3,DATE'23/02/2017', CAST ('12:05:06.0000000' AS TIME), 1, 2, 23480, 'Compra de una habitacion de hotel');

INSERT INTO alojamientos VALUES (2,  'suBuenHotel', 4);
INSERT INTO alojamientos VALUES (3,  'Hotel de lujo', 5);

INSERT INTO habitaciones VALUES (4, 3, 19990, 3, 2, 1, 2, DATE'24/05/2017', CAST ('09:05:55.0000000' AS TIME), DATE '27/05/2017', CAST ('09:05:55.0000000' AS TIME));
INSERT INTO habitaciones VALUES (3, 2, 29990, 4, 3, 2, 1, DATE'01/05/2017', CAST ('19:05:55.0000000' AS TIME), DATE '12/07/2017', CAST ('19:05:55.0000000' AS TIME));

INSERT INTO traslados VALUES (2,3, 5, 12990, 'detenciones: paradero 4, 6,7, 9', 4, 7,DATE'23/02/2017', CAST ('12:05:06.0000000' AS TIME));
INSERT INTO traslados VALUES (3,2, 4, 14990, 'detenciones: paradero 2,7, 9', 4, 7,DATE'27/02/2017', CAST ('14:05:06.0000000' AS TIME));

INSERT INTO aeropuertos VALUES (2,  'Arturo Benites', 2,3);
INSERT INTO aeropuertos VALUES (4,  'Jose Tomallo', 1,2);

INSERT INTO vuelos VALUES (1, 2, 2,3, 2,34990, 2, 3, DATE'10/08/2017', CAST ('11:05:55.0000000' AS TIME), DATE '21/08/2017', CAST ('11:05:55.0000000' AS TIME));
INSERT INTO vuelos VALUES (1, 2, 2,3, 2,34990, 2, 3, DATE'10/11/2017', CAST ('12:06:55.0000000' AS TIME), DATE '15/11/2017', CAST ('12:06:55.0000000' AS TIME));

INSERT INTO asientos VALUES (2, true, 24, 2);
INSERT INTO asientos VALUES (4, false, 72, 1);


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