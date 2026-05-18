# Senac 2026 1 PI Grupo 9

#  Projeto Integrador Senac 2026 - Gestão Fácil

O Gestão Fácil é uma aplicação web desenvolvida para simplificar a administração de pequenos negócios. O sistema foca em três pilares principais: gestão de carteira de clientes, acompanhamento de pedidos e monitoramento inteligente de estoque com alertas automáticos de escassez.

##  Funcionalidades
- **Dashboard Intuitivo:** Visão geral de pedidos em aberto, prazos de entrega próximos e painel com notificações de itens esgotados ou com quantidade reduzida;
- **Gestão de Clientes:** Cadastro completo contendo Nome, Telefone, Endereço detalhado, com fácil visualização e edição;
- **Controle de Estoque:** Tabela de produtos integrada, informando quantidades exatas em tempo real e níveis mínimos, personalizáveis para ativação de alertas visuais;
- **Interface Limpa:** Design minimalista e de fácil navegação, priorizando a usabilidade no cotidiano operacional.

## Tecnologias utilizadas
- **PHP** (Lógica de Backend e Sessões)
- **HTML5, CSS3 e JS** (Interface Estruturada)
- **MySQL** (Banco de Dados Relacional)
- **Apache/Localhost** (Ambiente de Desenvolvimento)

## Estrutura de telas do sistema
- **Login (index.php):** Portal seguro de autenticação para controle de acesso ao sistema administrativo;
- **Painel principal (home.php):** Central de indicadores rápidos que exibe em tempo real o total de pedidos em aberto e o status crítico de estoque;
- **Lista de clientes (clientes.php e cadastrarCliente.php)**: Interface para manutenção da base de clientes, com opções de inserção de novos registros e edição direta;
- **Lista de pedidos (pedidos.php e cadastrarPedido.php)**: Interface para visualização de pedidos, com opções de inserção de novos registros e edição direta;
- **Controle de estoque (estoque.php):** Planilha administrativa de produtos que sinaliza automaticamente em cor amarela/laranja quando a quantidade atinge o limite do alerta.

## Instalação e execução local
1. Clonar ou extrair o repositório 📁[`/PI-Grupo-09`](https://github.com/viniciusevsouza/PI-Grupo-09-Segunda-Entrega/tree/main/PI-Grupo-09) dentro do diretório padrão do seu servidor local (ex: htdocs no XAMPP e www no UwAmp);
2. Inicializar os serviços do Apache e MySQL através do painel de controle do ambiente escolhido;
3. Importar o arquivo de banco de dados estruturado 🛢[`/database.sql`](https://github.com/viniciusevsouza/PI-Grupo-09-Segunda-Entrega/blob/main/database.sql) no ambiente do phpMyAdmin;
4. Abrir o navegador web de sua preferência e acessar o endereço local correspondente: http://localhost/PI-Grupo-09/index.php.

## Demonstração e documentação
[`Clique aqui`](video.mp4) para baixar e assitir ao vídeo de demonstração do Gestão Fácil.

[`Visão de produto, Personas e Jornadas do Usuário`](PI.pdf).

##  Autores

Este é um projeto desenhado e executado a várias mãos:

 DIOGO AMERICO GOMES DIOGENES

 GUILHERME DE SOUZA MEDEIROS
 
 VINICIUS EVANGELISTA DE SOUZA
 
 GABRIEL FERREIRA MACHADO
 
 JOAO GABRIEL LOPES TRINDADE
 
 ALINE PEREIRA BARBOSA
 
 HIAGO PROTASIO DOS PASSOS SALES
