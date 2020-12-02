create table productos(
id_producto		integer primary key AUTOINCREMENT ,
producto		text(20) not null, 
precio			integer(5) not null,
existencias		integer(5) not null
);

create table tickets(
id_ticket 	integer primary key AUTOINCREMENT ,
fecha		date not null,
hora_venta 	time,
cantidad_producto   integer(1) not null,
producto	varchar(20) not null, 
total_Producto 		integer(10) not null
);