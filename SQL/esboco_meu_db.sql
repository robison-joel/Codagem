create table contatos(
id not null auto_increment unique,
Nome - varchar(40) unique not null,
apelido,
contato_tel,
contato_email,
contato_site,
contato_cel,
contato_endereco,
observacao text,
fin_pix,
fin_banco,
fin_agencia,
fin_conta,
primary key(id)
)default charset='utf8';