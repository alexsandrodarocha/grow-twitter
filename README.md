# GrowTwitter

## Descrição

GrowTwitter é uma aplicação de rede social estilo Twitter, desenvolvida utilizando conceitos de Programação Orientada a Objetos (POO) em PHP. Esta aplicação permite o cadastro de usuários, a postagem de tweets e a funcionalidade de likes em tweets.

## Funcionalidades

### Cadastro de Usuários
- **Dados Necessários:** Identificador, nome, e-mail, username e senha.
- **Regras:** 
  - `id` e `username` devem ser únicos.

### Cadastro de Tweets
- **Dados Necessários:** Identificador e conteúdo.
- **Regras:** 
  - `id` deve ser único.
  - Cada tweet pertence a um único usuário.

### Likes em Tweets
- **Regras:** 
  - Um usuário pode curtir um tweet específico.
  - Um tweet pode ter zero ou vários likes.

## Requisitos Técnicos

### Estrutura do Projeto

- **POO:** Utilização dos pilares da Programação Orientada a Objetos.
- **Classes:** Criar classes para as entidades necessárias.
- **Relacionamentos:** Estabelecimento de relacionamentos do tipo composição.
- **Armazenamento:** Dados armazenados em um banco de dados em memória (array).

### Dados de um Usuário
- **Atributos:** 
  - `id`
  - `nome`
  - `email`
  - `username`
  - `senha`

### Dados de um Tweet
- **Atributos:**
  - `id`
  - `conteúdo`
