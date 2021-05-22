insert into pessoas
values
(default, 'Brusqueta', '1982-10-5', 'F', '80', '1.88', 'Itállia'),
(default, 'Pedro', '1985-04-20', 'M', '89.5', '2.01', 'Argentina');

select * from pessoas;

desc pessoas;

alter table pessoas
add column profissao varchar(40) after nome;

alter table pessoas
drop column profissao;

