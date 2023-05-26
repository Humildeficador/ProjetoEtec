CREATE DATABASE mercado;

USE mercado;

CREATE TABLE produto (
	codProd INT NOT NULL,
	descricao VARCHAR(30) NOT NULL,
	valor DECIMAL(7,2) NOT NULL,
	vencimento DATE NOT NULL
);

CREATE TABLE movimento (
	codProd INT NOT NULL,
	tipo CHAR(1) NOT NULL,
	qnt INT NOT NULL,
	dataMov TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cliente (
	codCliente INT NOT NULL,
	nome VARCHAR (60) NOT NULL,
    cpf INT (11) NOT NULL,
    celular INT (12) NOT NULL,
    cep INT (8) NOT NULL
);

CREATE TABLE fornecedor (
	codFornecedor INT NOT NULL,
    nome VARCHAR (60) NOT NULL,
    cnpj INT (11) NOT NULL,
    celular INT (12) NOT NULL,
    cep INT (8) NOT NULL
);
