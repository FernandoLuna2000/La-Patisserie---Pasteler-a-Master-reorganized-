create database patisserie2;
use patisserie2;

create table producto(
idProducto INT PRIMARY KEY,
nombre varchar (25) ,
precio int,
tipoAdorno varchar (25),
tipoRelleno varchar (25),
numPersonas int,
existencia int
);


create table cliente(
idCliente INT PRIMARY KEY,
tipoCliente varchar (25) ,
nombre varchar (25) ,
direccion varchar (25),
telefono varchar (10),
correo varchar (30),
rfc int
);

create table cliente_reserva(
idCliente int not null,
idReserva int not null,
idProductoSucursal int not null,
foreign key (idCliente) references cliente (idCliente),
foreign key (idProductoSursal) references productoSucursal (idProductoSucursal),
foreign key (idReserva) references reserva (idReserva)
);

create table compra(
idCompra INT PRIMARY KEY,
fechaPago date,
fechaEntrega date,
tarjetaCredito blob,
idCliente int not null,
idProducto int not null,
foreign key (idCliente) references cliente (idCliente),
foreign key (idProducto) references producto (idProducto)
);

create table sucursal(
idSucursal INT PRIMARY KEY,
direccion varchar (45) ,
telefono varchar (10),
horarioA int,
horarioC int
);

create table reserva(
idReserva INT PRIMARY KEY,
fechaP date ,
fechaE date ,
total int,
idSucursal int not null,
foreign key (idSucursal) references sucursal (idSucursal)
);

create table productoSucursal(
idProductoSucursal INT PRIMARY KEY,
cantidadProducto int,
idSucursal int not null,
idProducto int not null,
foreign key (idSucursal) references sucursal (idSucursal),
foreign key (idProducto) references producto (idProducto)
);
