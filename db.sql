CREATE TABLE movimento (
	codProd INT NOT NULL,
	tipo VARCHAR(1) NOT NULL,
	qtd INT NOT NULL,
	dataMov TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP
);

ALTER TABLE movimento RENAME COLUMN qtd TO qnt;