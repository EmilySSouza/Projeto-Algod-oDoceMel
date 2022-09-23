CREATE DATABASE TCC2;

USE TCC2;

create table conta_user(
codigo int (10) primary key not null auto_increment,
nome varchar(70) not null,
sobrenome varchar (70) not null,
login varchar(70) not null,
email varchar(70)not null,
senha varchar(150)not null,
numero_celular int(30) not null,
cep varchar(70) not null,
endereco varchar(150) not null,
complemento varchar(250) not null,
bairro varchar(150) not null
);

create table conta_adm(
codigo int(10) primary key not null auto_increment,
nome varchar(70)not null,
sobrenome varchar (70) not null,
login varchar(70) not null,
email varchar(70)not null,
senha varchar(150) not null,
numero_celular int(30) not null
);

create table tb_produtos(
codigo int(10) primary key not null auto_increment,
descricao varchar (300) not null,
preco double (9,2) not null default '0'
);

create table vendas(
codigo int(10) primary key not null auto_increment,
codigo_user int (10) not null,
codigo_produtos int(10) not null
);

insert into conta_user(nome,sobrenome,login,email,senha,numero_celular,cep,endereco,complemento, bairro) values ('Maisa','Silva','maisasilva01','maisasilva@gmail.com','123456maisa', 91924952,60590321,'rua dom pedro 1','ao lado do estadio barradão', 'Itacaranha');
insert into conta_user(nome,sobrenome,login,email,senha,numero_celular,cep,endereco,complemento, bairro) values ('Ricardo','Souza','ricardo4982','ricardosouza@gmail.com','under2123',932124509,70021432,"Rua da liberdade",'Ao lado do mercado atacadão', 'Pau da Lima');
insert into conta_user(nome,sobrenome,login,email,senha,numero_celular,cep,endereco,complemento, bairro) values ('Moises','Silva','moisessil1234','moisessilva@gmail.com','moi_ses4321',98213412,60590321,"Rua dom pedro 1",'ao lado do estadio barradao', 'Piraja');

delete from conta_user where codigo = 1;
delete from conta_user where codigo = 2;
delete from conta_user where codigo = 3;

Select * from conta_user;
insert into conta_adm(nome,sobrenome,login,email,senha,numero_celular) values ('Emily','Souza','Emilysouza20','emilysouza@gmail.com','emily1234',991345673);

Select * from conta_adm;

insert into tb_produtos(descricao,preco) value('Algodão doce no saco com uma cor,sem brinde e sem personalização',2.0);
insert into tb_produtos(descricao,preco) value('Algodão doce no saco com uma cor,sem brinde e com personalização',3.0);
insert into tb_produtos(descricao,preco) value('Algodão doce no saco com uma cor,com brinde sem personalização',2.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no saco com uma cor,com brinde e com personalização',3.50);

insert into tb_produtos(descricao,preco) value('Algodão doce no saco com 2 ou 3 cores,sem brinde e sem personalização',2.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no saco com 2 ou 3 cores,sem brinde e com personalização',3.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no saco com 2 ou 3 cores,com brinde e sem personalização',3.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no saco com 2 ou 3 cores,com brinde e com personalização',4.00);

insert into tb_produtos(descricao,preco) value('Algodão doce na casquinha com uma cor,sem personalização',3.50);
insert into tb_produtos(descricao,preco) value('Algodão doce na casquinha com uma cor,com personalização',4.00);
insert into tb_produtos(descricao,preco) value('Algodão doce na casquinha com duas cores,sem personalização',4.50);
insert into tb_produtos(descricao,preco) value('Algodão doce na casquinha com duas cores,sem personalização',5.00);

insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor,tamanho P e sem personalização',3.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor,tamanho M e sem personalização',4.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor,tamanho G e sem personalização',5.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor,tamanho P e com personalização',3.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor,tamanho M e com personalização',4.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor,tamanho G e com personalização',5.50);

insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e com marshmallow,tamanho P e sem personalização',4.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e com marshmallow,tamanho M e sem personalização',5.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e com marshmallow,tamanho G e sem personalização',6.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e com marshmallow,tamanho P e com personalização',4.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e com marshmallow,tamanho M e com personalização',5.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e com marshmallow,tamanho G e com personalização',6.50);

insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e  com recheio(Ninho,Paçoca,Oreo ou Disquete),tamanho P e sem marshmallow',4.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e  com recheio(Ninho,Paçoca,Oreo ou Disquete),tamanho M e sem marshmallow',5.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e  com recheio(Ninho,Paçoca,Oreo ou Disquete),tamanho G e sem marshmallow',6.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e  com recheio(Ninho,Paçoca,Oreo ou Disquete),tamanho P e com marshmallow',5.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e  com recheio(Ninho,Paçoca,Oreo ou Disquete),tamanho M e com marshmallow',6.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com uma cor e  com recheio(Ninho,Paçoca,Oreo ou Disquete),tamanho G e com marshmallow',7.00);

insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores e sem recheio,tamanho P e sem personalização',5.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores e sem recheio,tamanho M e sem personalização',6.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores e sem recheio,tamanho G e sem personalização',7.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores e sem recheio,tamanho P e com personalização',5.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores e sem recheio,tamanho M e com personalização',6.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores e sem recheio,tamanho G e com personalização',7.00);

insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores, com recheio e marshmallow,tamanho P e sem personalização',7.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores, com recheio e marshmallow,tamanho M e sem personalização',8.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores, com recheio e marshmallow,tamanho G e sem personalização',9.00);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores, com recheio e marshmallow,tamanho P e com personalização',7.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores, com recheio e marshmallow,tamanho M e com personalização',8.50);
insert into tb_produtos(descricao,preco) value('Algodão doce no pote com 2/3 cores, com recheio e marshmallow,tamanho G e com personalização',9.50);

Select * from tb_produtos;
alter table tcc2.tb_produtos add nome varchar (45);
update tb_produtos set nome = "Algodão doce no saco" where codigo = 1;
update tb_produtos set nome = "Algodão doce no pote" where codigo =2;
update tb_produtos set nome = "Algodão doce no copo" where codigo = 3;
update tb_produtos set nome = "Algodão doce na jarra" where codigo =4;
update tb_produtos set nome = "Algodão doce na vasilha" where codigo = 5;
update tb_produtos set nome = "Algodão doce na panela"  where codigo =6;
update tb_produtos set nome = "Algodão doce na janela"  where codigo =7;

create table vendas(
codigo int(10) primary key not null auto_increment,
codigo_user int (10) not null,
codigo_produtos int (10) not null,
ref int(30) not null,
forma varchar(150) not null,
datavenda timestamp default current_timestamp not null,
valor double (11,3) not null,
statusvenda varchar(30) not null,
quantidade int(255) not null,

foreign key(codigo_user) references conta_user(codigo),
foreign key(codigo_produtos) references tb_produtos(codigo)
);

 drop table vendas; 
 
SELECT * FROM vendas;
 
insert into vendas(codigo_user,codigo_produtos,ref,forma,datavenda,valor,statusvenda,quantidade) values('4','2','32123','Mercado pago','2021-07-12 17:40:58',150,'pendente','30');

select conta_user.nome,tb_produtos.descricao,vendas.valor,vendas.datavenda,vendas.quantidade from conta_user
INNER JOIN vendas
INNER JOIN tb_produtos
on tb_produtos.codigo=vendas.codigo_produtos
AND
conta_user.codigo=vendas.codigo_user;

alter table tcc2.tb_produtos add quantidade int(10);

alter table conta_user modify numero_celular varchar(30) not null;

alter table vendas modify valor double(11,2) not null;

ALTER TABLE vendas DROP COLUMN statusvenda;

create table tb_vendas2(
codigo_vendas int (12)primary key not null auto_increment,
nome varchar (500) not null,
tamanho varchar(1) not null,
quantidade int (10) not null,
dataentrega DATE,
horaentrega time, 
local varchar (300) not null,
nomeusuario varchar(100) not null
);