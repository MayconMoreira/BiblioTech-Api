# BiblioTech API

A BiblioTech API é uma API RESTful moderna baseada em Laravel para gerenciar um sistema de biblioteca digital. Ela fornece endpoints para gerenciar usuários, autores, categorias, livros e empréstimos.

## Características

- Autenticação de usuário usando JWT
- Operações CRUD para usuários, autores, categorias, livros e empréstimos
- Gerenciamento de relacionamentos entre entidades
- Job automatizado para processar empréstimos atrasados

## Requisitos

- Docker
- Docker Compose


## Configuração

O projeto usa os seguintes serviços Docker:

- `php`: Serviço PHP-FPM para executar a aplicação Laravel
- `nginx`: Servidor web
- `mysql`: Banco de dados MySQL
- `phpmyadmin`: PHPMyAdmin para gerenciamento do banco de dados

Você pode acessar os serviços da seguinte forma:

- Aplicação Laravel: http://localhost:8080
- PHPMyAdmin: http://localhost:8888

Credenciais do banco de dados:
- Host: setup-mysql
- Banco de dados: laravel
- Usuário: user
- Senha: password

## Executando a Aplicação

Após a instalação e configuração, sua aplicação deve estar funcionando. Você pode acessá-la em http://localhost:8080.


## Rotas da API

Todas as rotas da API são prefixadas com `/api`. Aqui estão os endpoints disponíveis:

### Autenticação
- POST `/api/auth/login`: Login do usuário
- POST `/api/auth/register`: Registro de usuário
- POST `/api/auth/logout`: Logout do usuário (requer autenticação)
- POST `/api/auth/refresh`: Atualizar token JWT (requer autenticação)

### Usuários
- GET `/api/users`: Listar todos os usuários (requer autenticação)
- POST `/api/users`: Criar um novo usuário (requer autenticação)
- GET `/api/users/{id}`: Obter um usuário específico (requer autenticação)
- PUT `/api/users/{id}`: Atualizar um usuário (requer autenticação)
- DELETE `/api/users/{id}`: Excluir um usuário (requer autenticação)

### Autores
- GET `/api/authors`: Listar todos os autores (requer autenticação)
- POST `/api/authors`: Criar um novo autor (requer autenticação)
- GET `/api/authors/{id}`: Obter um autor específico (requer autenticação)
- PUT `/api/authors/{id}`: Atualizar um autor (requer autenticação)
- DELETE `/api/authors/{id}`: Excluir um autor (requer autenticação)

### Categorias
- GET `/api/categories`: Listar todas as categorias (requer autenticação)
- POST `/api/categories`: Criar uma nova categoria (requer autenticação)
- GET `/api/categories/{id}`: Obter uma categoria específica (requer autenticação)
- PUT `/api/categories/{id}`: Atualizar uma categoria (requer autenticação)
- DELETE `/api/categories/{id}`: Excluir uma categoria (requer autenticação)

### Livros
- GET `/api/books`: Listar todos os livros (requer autenticação)
- POST `/api/books`: Criar um novo livro (requer autenticação)
- GET `/api/books/{id}`: Obter um livro específico (requer autenticação)
- PUT `/api/books/{id}`: Atualizar um livro (requer autenticação)
- DELETE `/api/books/{id}`: Excluir um livro (requer autenticação)

### Empréstimos
- GET `/api/loans`: Listar todos os empréstimos (requer autenticação)
- POST `/api/loans`: Criar um novo empréstimo (requer autenticação)
- GET `/api/loans/{id}`: Obter um empréstimo específico (requer autenticação)
- PUT `/api/loans/{id}`: Atualizar um empréstimo (requer autenticação)
- DELETE `/api/loans/{id}`: Excluir um empréstimo (requer autenticação)
