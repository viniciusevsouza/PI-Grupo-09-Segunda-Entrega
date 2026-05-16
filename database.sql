CREATE DATABASE IF NOT EXISTS pi_2_entrega;
USE pi_2_entrega;
CREATE TABLE IF NOT EXISTS usuarios (id int AUTO_INCREMENT PRIMARY key, nome varchar(100) not null, usuario varchar(100) not null, senha varchar(100) not null, email varchar(100) not null);
CREATE TABLE IF NOT EXISTS clientes ( id int AUTO_INCREMENT PRIMARY key, nome varchar(100) not null, telefone varchar(20) not null, endereço varchar(200) not null, complemento varchar(100), cidade varchar(100) not null, estado varchar(100) not null, pais varchar(2) not null);
CREATE TABLE IF NOT EXISTS pedidos (id int AUTO_INCREMENT PRIMARY key, tipo_produto varchar(100), quantidade int, detalhes_pedido varchar(200), data_pedido datetime DEFAULT CURRENT_TIMESTAMP, data_entrega date, status varchar(100) DEFAULT "recebido", cliente_id int, CONSTRAINT fk_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id));
CREATE TABLE IF NOT EXISTS estoque (id int AUTO_INCREMENT PRIMARY key, produto varchar(100), quantidade int, alerta int );


INSERT INTO usuarios  (nome, usuario, senha, email)
VALUES ("Carla Souza", "carla", "12345", "carla.souza@gmail.com");


INSERT INTO clientes(nome, telefone, endereço, complemento, cidade, estado, pais)
VALUES
("Jose Oliveira", "11912345678", "Rua X, 123", "Casa", "São Paulo", "SP", "BR"),
("Mariana Lima", "11987654321", "Av Brasil, 450", "Apto 12", "São Paulo", "SP", "BR"),
("Carlos Mendes", "21999887766", "Rua das Flores, 98", "Fundos", "Rio de Janeiro", "RJ", "BR"),
("Fernanda Rocha", "31988776655", "Rua Central, 220", "Bloco B", "Belo Horizonte", "MG", "BR"),
("Ricardo Alves", "41977665544", "Av Paraná, 1000", "Sala 5", "Curitiba", "PR", "BR"),
("Patricia Gomes", "51966554433", "Rua do Porto, 88", "Casa", "Porto Alegre", "RS", "BR"),
("Lucas Ferreira", "61955443322", "QS 15, Conjunto 4", "Casa", "Brasília", "DF", "BR"),
("Amanda Costa", "71944332211", "Rua do Sol, 45", "Cobertura", "Salvador", "BA", "BR"),
("Thiago Martins", "85933221100", "Av Beira Mar, 700", "Apto 80", "Fortaleza", "CE", "BR"),
("Juliana Ribeiro", "48922110099", "Rua Azul, 301", "Casa", "Florianópolis", "SC", "BR");


INSERT INTO estoque(produto, quantidade, alerta)
VALUES
("Farinha de trigo", 10, 2),
("Leite", 1, 2),
("Açúcar", 15, 3),
("Ovos", 2, 2),
("Chocolate em pó", 1, 2),
("Fermento químico", 0, 1),
("Manteiga", 8, 2),
("Leite condensado", 0, 1),
("Creme de leite", 3, 3),
("Granulado", 2, 2),
("Baunilha", 6, 2),
("Cenoura", 20, 5);


INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Fatia de bolo de chocolate", 2, "Cobertura sem granulado", '2026-05-15', 'Finalizado', 1),
("Bolo de cenoura", 1, "Com cobertura de chocolate", '2026-05-20', 'recebido', 1),
("Cupcake de baunilha", 6, "Sem recheio", '2026-05-21', 'Em preparo', 1);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Bolo floresta negra", 1, "Com morangos", '2026-05-22', 'Finalizado', 2),
("Torta de limão", 2, "Base crocante", '2026-05-23', 'recebido', 2),
("Brigadeiro gourmet", 20, "Chocolate belga", '2026-05-24', 'Finalizado', 2);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Bolo de morango", 1, "Sem açúcar", '2026-05-18', 'Finalizado', 3),
("Cupcake de chocolate", 12, "Com recheio", '2026-05-19', 'Em preparo', 3),
("Brownie", 10, "Com nozes", '2026-05-20', 'recebido', 3),
("Bolo red velvet", 1, "Cobertura cream cheese", '2026-05-21', 'recebido', 3);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Torta holandesa", 1, "Tradicional", '2026-05-22', 'Finalizado', 4),
("Bolo de milho", 2, "Sem coco", '2026-05-23', 'recebido', 4);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Bolo de aniversário", 1, "Tema azul", '2026-05-25', 'Em preparo', 5),
("Cupcake red velvet", 8, "Com chantilly", '2026-05-26', 'Finalizado', 5),
("Pudim", 2, "Calda extra", '2026-05-27', 'recebido', 5);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Cheesecake", 1, "Frutas vermelhas", '2026-05-28', 'Finalizado', 6),
("Bolo prestígio", 1, "Com bastante coco", '2026-05-29', 'recebido', 6),
("Brigadeiro", 50, "Tradicional", '2026-05-30', 'Finalizado', 6),
("Torta de chocolate", 1, "70% cacau", '2026-05-31', 'Em preparo', 6);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Bolo de banana", 1, "Sem canela", '2026-05-20', 'recebido', 7),
("Donuts", 12, "Cobertura colorida", '2026-05-21', 'Finalizado', 7);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Macarons", 24, "Sabores variados", '2026-05-22', 'Finalizado', 8),
("Bolo mousse", 1, "Chocolate meio amargo", '2026-05-23', 'Em preparo', 8),
("Bolo simples", 2, "Sem recheio", '2026-05-24', 'recebido', 8);


INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Bolo vulcão", 1, "Muito brigadeiro", '2026-05-25', 'Finalizado', 9),
("Torta de morango", 1, "Com chantilly", '2026-05-26', 'recebido', 9),
("Brownie", 15, "Chocolate branco", '2026-05-27', 'Em preparo', 9),
("Cupcake", 10, "Tema infantil", '2026-05-28', 'Finalizado', 9);

INSERT INTO pedidos(tipo_produto, quantidade, detalhes_pedido, data_entrega, status, cliente_id)
VALUES
("Bolo de casamento", 1, "3 andares", '2026-06-01', 'Em preparo', 10),
("Docinhos", 100, "Sortidos", '2026-06-02', 'Finalizado', 10),
("Bolo de chocolate", 2, "Extra recheio", '2026-06-03', 'recebido', 10),
("Pão de mel", 30, "Com doce de leite", '2026-06-04', 'recebido', 10),
("Cheesecake", 1, "Nutella", '2026-06-05', 'Finalizado', 10);


