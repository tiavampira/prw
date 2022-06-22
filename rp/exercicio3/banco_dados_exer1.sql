-- Drop banco de dados
-- drop database exercicio3;

-- Criação do banco de dados
create database exercicio3;

-- Selecionar banco de dados
use exercicio3;

-- Criação da tabela usuario
create table imoveis (
	id_imoveis  	    	int 			not null auto_increment,
    endereco				varchar(50)		not null,
    cidade			        varchar(40)		not null, 
    estado			        varchar(70)		not null,
	valor				    varchar(50)		not null, 
	data_cadastro				date		not null,
    primary key (id_imoveis)
);