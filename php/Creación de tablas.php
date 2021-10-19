<?php
$mysqli = new mysqli ("localhost", "BDA", "Lapatti", "patisserie");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}

//Tabla Producto
if(!$mysqli->query("DROP TABLE IF EXISTS Producto") ||
!$mysqli->query("CREATE TABLE Producto(idProducto INT PRIMARY KEY, nombre VARCHAR(25), precio INT, tipoAdorno VARCHAR (25), tipoRelleno VARCHAR (25), numPersonas INT, existencia INT)"))
{
  echo "Falló la creación de la Tabla Producto: (".$mysqli->errno.")" .$mysqli->errno;
}

//Tabla Cleinte
if(!$mysqli->query("DROP TABLE IF EXISTS cliente") ||
!$mysqli->query("CREATE TABLE cliente(idCliente INT PRIMARY KEY, tipoCliente VARCHAR(25), nombre VARCHAR(25), direccion VARCHAR (25), telefono VARCHAR (25), correo VARCHAR(30), rfc INT)"))
{
  echo "Falló la creación de la Tabla Cliente: (".$mysqli->errno.")" .$mysqli->errno;
}

//Tabla Sucursal (sin datos)
if(!$mysqli->query("DROP TABLE IF EXISTS sucursal") ||
!$mysqli->query("CREATE TABLE sucursal(idSucursal INT PRIMARY KEY, direccion VARCHAR(25), telefono VARCHAR(10), horarioA INT, horarioC int)")
){
  echo "Falló la creación de la Tabla Sucursal: (".$mysqli->errno.")" .$mysqli->errno;
}

//Tabla Reserva
if(!$mysqli->query("DROP TABLE IF EXISTS reserva") ||
!$mysqli->query("CREATE TABLE reserva(idReserva INT PRIMARY KEY, fechaP date, fechaE date, total INT, idSucursal INT NOT NULL, foreign KEY (idSucursal) references sucursal (idSucursal))")
){
  echo "Falló la creación de la Tabla Reserva: (".$mysqli->errno.")" .$mysqli->errno;
}

// Tabla productoSucursal
if(!$mysqli->query("DROP TABLE IF EXISTS productoSucursal") ||
!$mysqli->query("CREATE TABLE productoSucursal(idProductoSucursal INT PRIMARY KEY, cantidadProducto INT, idSucursal INT NOT NULL, idProducto INT NOT NULL, foreign KEY (idSucursal) references sucursal (idSucursal), foreign KEY (idProducto) references producto (idProducto))")
){
  echo "Falló la creación de la Tabla Productosucursal: (".$mysqli->errno.")" .$mysqli->errno;
}
// Tabla Compra
if(!$mysqli->query("DROP TABLE IF EXISTS compra") ||
!$mysqli->query("CREATE TABLE compra(idCompra INT PRIMARY KEY, fechaPago DATE, fechaEntrega DATE, tarjetaCredito BLOB, idCliente INT NOT NULL, idProducto INT NOT NULL, foreign key (idCliente)references cliente (idCliente), foreign key (idProducto) references producto (idProducto))")
){
  echo "Falló la creación de la Tabla Compra: (".$mysqli->errno.")" .$mysqli->errno;
}
//Tabla cliente_reserva
if(!$mysqli->query("DROP TABLE IF EXISTS cliente_reserva") ||
!$mysqli->query("CREATE TABLE cliente_reserva(idCliente INT NOT NULL, idReserva INT NOT NULL, idProductoSucursal INT NOT NULL, foreign key (idCliente) references cliente (idCliente), foreign key (idProductoSucursal) references productoSucursal (idProductoSucursal),foreign key (idReserva) references reserva (idReserva))")
){
  echo "Falló la creación de la Tablacliente_reserva: (".$mysqli->errno.")" .$mysqli->errno;
}

//Tabla usuarios
if(!$mysqli->query("DROP TABLE IF EXISTS usuarios") ||
!$mysqli->query("CREATE TABLE usuarios(idusuario INT PRIMARY KEY, username VARCHAR(10), password VARCHAR(10))"))
!$mysqli->query ("INSERT INTO usuarios VALUES(1,'BDA','Lapatti')");
{
  echo "Falló la creación de la Tabla usuarios: (".$mysqli->errno.")" .$mysqli->errno;
}
?>
