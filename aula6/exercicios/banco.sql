create database digitalhouse;

create table clientes(
	id_cliente int primary key,
	nome varchar(50) not null,
	email varchar(100) null
);

create table pedidos(
	`id_pedido` int primary key auto_increment,
	`id_cliente` int,
	`valor_total_pedido` varchar(10),
	constraint `fk_cliente` FOREIGN KEY ( `id_cliente` ) REFERENCES `clientes` ( `id_cliente` )
);