CREATE table contatos (
id int auto_increment not null,
nome varchar(40) not null,
nascimento date,
email varchar(40) not null,
primary key(id)
)default charset=utf8;

select * from contatos;

use contatos;

insert into contatos
values
(default, 'Nilza Mallet', '1956-02-25', 'mallet.nilza@gmail.com'),
(default, 'Bruna Ferreira', '1998-11-20', 'brunixxwitt@gmail.com'),
(default, 'Ana Clara Simon', '2011-02-11', 'anaximbica@gmail.com'),
(default, 'Martin Simon', '2012-09-4', 'martinxixbiu@gmail.com');

alter table contatos
drop telefone;

