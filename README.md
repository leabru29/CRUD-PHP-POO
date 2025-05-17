# CRUD PHP POO

Este projeto é um exemplo simples de CRUD (Create, Read, Update, Delete) utilizando PHP com Programação Orientada a Objetos (POO). Ele tem como objetivo demonstrar os conceitos fundamentais da orientação a objetos aplicada ao desenvolvimento web com PHP puro, sem frameworks.

## Funcionalidades

- Cadastro de registros
- Listagem de registros
- Edição de registros
- Exclusão de registros

## Tecnologias Utilizadas

- PHP 7+
- MySQL
- HTML5
- CSS3
- Bootstrap (opcional)

## Estrutura do Projeto

- `config/` – Arquivo de configuração do banco de dados
- `classes/` – Classes principais do sistema (conexão, model, etc.)
- `views/` – Telas do sistema (formulários, tabelas, etc.)
- `index.php` – Ponto de entrada da aplicação

## Como Executar

1. Clone o repositório:

    ```bash
    git clone https://github.com/leabru29/CRUD-PHP-POO.git
    cd CRUD-PHP-POO
    ```

2. Importe o arquivo `database.sql` no seu banco de dados MySQL.

3. Configure a conexão com o banco no arquivo `config/Database.php`:

    ```php
    private $host = 'localhost';
    private $db_name = 'nome_do_banco';
    private $username = 'seu_usuario';
    private $password = 'sua_senha';
    ```

4. Inicie um servidor local (por exemplo, com o PHP embutido):

    ```bash
    php -S localhost:8000
    ```

5. Acesse a aplicação em:

    ```
    http://localhost:8000
    ```

## Contato

Desenvolvido por **Leandro Bezerra da Silva**  
🔗 [LinkedIn](https://www.linkedin.com/in/leandro-bezerra-da-silva-740064145/)  
🐙 [GitHub](https://github.com/leabru29)
