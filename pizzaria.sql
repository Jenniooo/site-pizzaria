CREATE DATABASE pizzaria;
USE pizzaria;
-- TABELAS
CREATE TABLE bordas(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
tipo VARCHAR(100)
);

CREATE TABLE massas(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
tipo VARCHAR(100)
);

CREATE TABLE sabores(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nome VARCHAR(100),
precos FLOAT
);

CREATE TABLE pizzas(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
borda_id INT NOT NULL,
massa_id INT NOT NULL,
FOREIGN KEY (borda_id) REFERENCES bordas (id),
FOREIGN KEY (massa_id) REFERENCES massas (id)
);

CREATE TABLE pizza_sabor(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
pizza_id INT NOT NULL,
sabor_id INT NOT NULL,
FOREIGN KEY (pizza_id) REFERENCES pizzas (id),
FOREIGN KEY (sabor_id) REFERENCES sabores (id)
);

CREATE TABLE status(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
tipo VARCHAR(100)
);

CREATE TABLE pedidos(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
pizza_id INT NOT NULL,
status_id INT NOT NULL,
FOREIGN KEY (pizza_id) REFERENCES pizzas (id),
FOREIGN KEY (status_id) REFERENCES status (id)
);

-- INSERTS
INSERT INTO status(tipo) VALUES
('Em produção'),
('Entrega'),
('Concluída');
SELECT * FROM status;

INSERT INTO massas(tipo) VALUES
('Comum'),
('Integral'),
('Temperada');
SELECT * FROM massas;

INSERT INTO bordas(tipo) VALUES
('Cheddar'),
('Catupiry');

INSERT INTO sabores(nome, precos) VALUES
('4 Queijos', '30.00'),
('Frango com catupiry', '32.00'),
('Calabresa', '26.00'),
('Lombinho', '42.00'),
('Filé com Cheddar', '50.00'),
('Portuguesa', '28.00'),
('Margherita', '26.00');

-- inserir data e hora
ALTER TABLE pedidos 
ADD COLUMN data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP;

-- login
CREATE TABLE cadastro_cliente(
id_cliente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
nome VARCHAR(150),
email VARCHAR(150),
bairro VARCHAR(30),
rua VARCHAR(100),
numero INT,
senha VARCHAR(20)
);


SELECT * FROM pedidos;

-- Vincular o cliente ao pedido
ALTER TABLE pedidos
ADD COLUMN cliente_id INT;

ALTER TABLE pedidos
ADD FOREIGN KEY (cliente_id) REFERENCES cadastro_cliente(id_cliente);

