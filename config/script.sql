create database digitalteca;

use digitalteca;

create table livros (
id int(11) primary key auto_increment not null,
nome varchar(50),
autor varchar(50),
imagem varchar(200),
preco decimal(10, 2)
);