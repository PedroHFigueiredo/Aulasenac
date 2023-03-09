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

CREATE TABLE tbl_docs(
	id INT AUTO_INCREMENT PRIMARY KEY,
	id_usuario INT,
	id_tipo_documento INT,
	documento CHAR(14),
	id_situacao INT DEFAULT 1

);

CREATE TABLE tbl_tipo_docs(
	id INT AUTO_INCREMENT PRIMARY KEY,
    tipo_doc VARCHAR(20)
);

CREATE TABLE tbl_genero(
	id INT AUTO_INCREMENT PRIMARY KEY,
	genero VARCHAR(30)
);

