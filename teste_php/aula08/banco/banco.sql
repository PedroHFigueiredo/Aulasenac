use aula08;

CREATE TABLE tbl_clientes(
	id_cliente INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(20), 
    sobrenome VARCHAR(20),
    data_nasc DATE, 
    id_genero INT, 
    newsletter CHAR(1),
    id_situacao INT
);

CREATE TABLE tbl_contatos_emails(
	id INT AUTO_INCREMENT PRIMARY KEY, 
    id_usuario INT,
    email VARCHAR(30), 
    id_situacao INT
    );
    
CREATE TABLE tbl_contatos(
	id INT AUTO_INCREMENT PRIMARY KEY, 
    id_usuario INT, 
    numero INT, 
    id_situacao INT
);

