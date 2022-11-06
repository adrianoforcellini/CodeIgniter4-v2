## Como utilizar a aplicação:
- Criar o usuário no MYSQL ( caso não o tenha )
- Após entrar no terminal MYSQL, utilize os seguintes comandos:

CREATE USER 'BlueLogic'@'localhost' IDENTIFIED BY 'simpleCRUD';

GRANT ALL PRIVILEGES ON * . * TO 'BlueLogic'@'localhost';

FLUSH PRIVILEGES;

- Caso já tenha um, basta modificar os valores dos seguintes campos no seu  arquivo .env

database.default.username = 

database.default.password = 


- Agora, criaremos o banco de dados que e a tabela que  serão utilizados:

CREATE DATABASE blue_logic;

USE blue_logic;


CREATE TABLE users (
     id int AUTO_INCREMENT,
     name VARCHAR(50),
     username VARCHAR(50),
     lastname VARCHAR(50),
     email VARCHAR(50),
     PRIMARY KEY (id),
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
     updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
     ); 

 - Feito isso, basta iniciar o servidor (utilizar o comando na pasta raiz do projeto):
 
 php spark serve

 - Por fim, acessar a aplicação em localhost:8080/users    
