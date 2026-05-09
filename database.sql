CREATE DATABASE IF NOT EXISTS pi_2_entrega;
USE pi_2_entrega;
CREATE TABLE IF NOT EXISTS usuarios (id int AUTO_INCREMENT PRIMARY key, nome varchar(100) not null, usuario varchar(100) not null, senha varchar(100) not null, email varchar(100) not null);
CREATE TABLE IF NOT EXISTS clientes ( id int AUTO_INCREMENT PRIMARY key, nome varchar(100) not null, telefone varchar(20) not null, endereço varchar(200) not null, complemento varchar(100), cidade varchar(100) not null, estado varchar(100) not null, pais varchar(2) not null);
CREATE TABLE IF NOT EXISTS pedidos (id int AUTO_INCREMENT PRIMARY key, tipo_produto varchar(100), quantidade int, detalhes_pedido varchar(200), data_pedido datetime DEFAULT CURRENT_TIMESTAMP, data_entrega date, status varchar(100) DEFAULT "recebido", cliente_id int, CONSTRAINT fk_cliente FOREIGN KEY(id_cliente) REFERENCES clientes(id));
CREATE TABLE IF NOT EXISTS estoque (id int AUTO_INCREMENT PRIMARY key, produto varchar(100), quantidade int, alerta int );

INSERT INTO usuarios  (nome, usuario, senha, email)
VALUES ("Carla Souza", "carla", "12345", "carla.souza@gmail.com");

INSERT INTO clientes(nome, telefone, endereço, complemento, cidade, estado, pais)
VALUES ("Jose Oliveira", "11912345678", "rua x, 123", "na", "cidade y", "estado Z", "BR");

INSERT INTO estoque(produto, quantidade, alerta)
VALUES ("Farinha de trigo", 10, 2),
("Leite", 1, 2);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, id_cliente)
VALUES ("Fatia de bolo de chocolate", 2, "cobertura sem granulado", '2026-05-15',1 );