create table if not exists cursos (
nome varchar(30) not null unique,
descricao text,
carga int unsigned,
totalaulas int unsigned,
ano year default '2016'
) default charset=utf8;

alter table cursos
add column idcurso int first;

describe cursos;

alter table cusrsos
add primary key (idcurso);


