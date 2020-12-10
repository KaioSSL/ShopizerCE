
DROP TABLE IF EXISTS Cliente;
CREATE TABLE Cliente(
    id SERIAL NOT NULL,
	login VARCHAR(20) NOT NULL,
	cpf   VARCHAR(16) NOT NULL,
	senha VARCHAR(20) NOT NULL,
	nome VARCHAR(45) NOT NULL,
	email VARCHAR(45) NOT NULL,
	dataNasc TIMESTAMP NOT NULL,
	data_cadastro TIMESTAMP NOT NULL,
	PRIMARY KEY(id));


DROP TABLE IF EXISTS Produto;
CREATE TABLE Produto(
	id SERIAL NOT NULL,
	desc_ VARCHAR(45) NOT NULL,
	desc_det VARCHAR(90) NOT NULL,
	altura FLOAT NOT NULL,
	comprimento FLOAT NOT NULL,
	peso FLOAT NOT NULL,
	largura FLOAT NOT NULL,
	complemento TEXT,
	categoria VARCHAR(45),
	PRIMARY KEY(id));

DROP TABLE IF EXISTS Endereco;
CREATE TABLE Endereco(
	id SERIAL NOT NULL,
	logradouro VARCHAR(45) NOT NULL,
	bairro VARCHAR(45) NOT NULL,
	cidade VARCHAR(45)NOT NULL,
	estado VARCHAR(45) NOT NULL,
	complemento VARCHAR(45) NOT NULL,
	id_cliente INT NOT NULL,
	CONSTRAINT id_cliente_fk FOREIGN KEY (id_cliente) REFERENCES Cliente(id) ON DELETE CASCADE,
	PRIMARY KEY(id));

DROP TABLE IF EXISTS Imagem;
CREATE TABLE Imagem(
	id SERIAL NOT NULL,
	id_produto INT NOT NULL,
	path TEXT NOT NULL,
	desc_ VARCHAR(45) NOT NULL,
	CONSTRAINT id_produto_fk FOREIGN KEY (id_produto) REFERENCES Produto (id) ON DELETE CASCADE,
	PRIMARY KEY (id));

DROP TABLE IF EXISTS Cartao_credito;
CREATE TABLE Cartao_credito(
	id SERIAL NOT NULL,
	data_cadastro TIMESTAMP NOT NULL,
	titular VARCHAR(45) NOT NULL,
	cpf_titular VARCHAR(16) NOT NULL,
	num_cartao VARCHAR(20) NOT NULL,
	cod_seg INT NOT NULL,
	validade VARCHAR(6) NOT NULL,
	id_cliente INT NOT NULL,
	CONSTRAINT id_cliente_fk FOREIGN KEY (id_cliente) REFERENCES Cliente(id) ON DELETE CASCADE,
	PRIMARY KEY(id));

DROP TABLE IF EXISTS Boleto;
CREATE TABLE Boleto(
	id SERIAL NOT NULL,
	data_cadastro TIMESTAMP NOT NULL,
	titular VARCHAR(45) NOT NULL,
	cpf_titular VARCHAR(16) NOT NULL,
	vencimento TIMESTAMP NOT NULL,
	cod_barras VARCHAR(45) NOT NULL,
	PRIMARY KEY (id));

DROP TABLE IF EXISTS Pagamento;
CREATE TABLE Pagamento(
	id SERIAL NOT NULL,
	id_cartao INT NOT NULL,
	id_boleto INT NOT NULL,
	tipo_pgto INT NOT NULL,
	n_parcelas INT NOT NULL,
	vlr_parcelas FLOAT NOT NULL,
	vencimento TIMESTAMP,
	CONSTRAINT id_cartao_fk FOREIGN KEY(id_cartao) REFERENCES Cartao_credito(id) ON DELETE CASCADE,
	CONSTRAINT id_boleto_fk FOREIGN KEY(id_boleto) REFERENCES Boleto(id) ON DELETE CASCADE,
	PRIMARY KEY(id));

DROP TABLE IF EXISTS Venda;
CREATE TABLE Venda(
	id SERIAL NOT NULL,
	data_cadastro TIMESTAMP NOT NULL,
	descontos FLOAT NOT NULL,
	vlr_total FLOAT NOT NULL,
	id_cliente INT NOT NULL,
	id_pagamento INT NOT NULL,
	CONSTRAINT id_pagamento_fk FOREIGN KEY(id_pagamento) REFERENCES Pagamento(id) ON DELETE CASCADE,
	CONSTRAINT id_cliente_fk FOREIGN KEY(id_cliente) REFERENCES Cliente(id) ON DELETE CASCADE,
	PRIMARY KEY (id));

DROP TABLE IF EXISTS Produto_Venda;
CREATE TABLE Produto_Venda(
	id SERIAL NOT NULL,
	id_produto INT NOT NULL,
	id_venda INT NOT NULL,
	qtd_produto FLOAT NOT NULL,
	vlr_unit FLOAT NOT NULL,
	vlr_total FLOAT NOT NULL,
	CONSTRAINT id_produto_fk FOREIGN KEY(id_produto) REFERENCES Produto(id) ON DELETE CASCADE,
	CONSTRAINT id_venda_fk FOREIGN KEY(id_venda) REFERENCES Venda(id) ON DELETE CASCADE,
	PRIMARY KEY(id));
	