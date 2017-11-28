create database trabalhophp
default character set utf8
default collate utf8_general_ci;

use trabalhophp; /* especifica o baco que sera criada as tabelas */

create table adm (
id int auto_increment,
username varchar(15),
senha varchar(32),
constraint adm_id_pk primary key(id)
)engine = InnoDB
default charset=utf8;

create table cliente(
id int auto_increment,
nome varchar(35),
telefone varchar(15),
endereco varchar(50),
constraint usuario_id_pk primary key(id)
)engine = InnoDB
default charset=utf8;

create table item(
id int auto_increment,
descricao varchar(100),
preco decimal(7, 2),
qtd int, 
constraint item_id_pk primary key(id)
)engine = InnoDB
default charset=utf8;


create table venda(
idCliente int,
idItem int,
dataCompra date,
constraint venda_idCliente_idItem_pks primary key(idCliente, idItem),
constraint venda_idCliente_fk foreign key(idCliente) references cliente(id),
constraint venda_idItem_fk foreign key(idItem) references item(id)
)engine = InnoDB
default charset=utf8;




