create database dbimoveis;

use dbimoveis;

create table imovel(
id int primary key,
tipo varchar(100) not null,
imobiliaria_nome varchar(100),
alugado varchar(3) not null,
nome_inquilino varchar(100),
CPF int (11),
pagamento float(50),
date date
);