<h1 align="center">API sem uso de Framework</h1>

<p align="center">
  <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-projeto">Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-como-executar">Como executar</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-saiba-mais">Saiba mais</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-licença">Licença</a>
</p>

<p align="center">
  <img alt="License" src="https://img.shields.io/static/v1?label=license&message=MIT&color=8257E5&labelColor=000000">
</p>

## ✨ Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [Datalayer](https://packagist.org/packages/coffeecode/datalayer)
- [Router](https://packagist.org/packages/coffeecode/router)

## 💻 Projeto

O Web Service é uma aplicação que simula uma API de usuários, com uso de de componentes do mercado disponíveis no Packagist.

## 🚀 Como executar

Pré requisitos para executar o projeto:

- Servidor Web
- PHP >= 7.2.0, com as seguintes extensões:
  - BCMath PHP
  - JSON PHP
  - Mbstring PHP
  - PDO PHP
  - PGSQL PHP
- Composer
- Postgres >= 12


- Instale as dependências com `composer install`
- Crie o banco de dados:

`
CREATE TABLE public.users (
id serial4 NOT NULL,
first_name varchar NULL,
last_name varchar NULL
);
`

- Configurar o banco de dados:
  - /source/App/Config/core_cfg.php 

- Agora você pode acessar [`http://localhost/ws-api-without-use-framework`](http://localhost/ws-api-without-use-framework) do seu navegador.
- Veja as rotas para consumir a API no aquivo `index.php`

## ⚡️ Saiba mais

- Fonte aprendizagem: [PHP Tips (Playlist Youtube)](https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj179ehqt_wAhVeCrkGHR_8DQkQFjAAegQIBBAD&url=https%3A%2F%2Fwww.youtube.com%2Fplaylist%3Flist%3DPLi_gvjv-JgXqsmCAOrueT1-4JrnMW8_Gg&usg=AOvVaw22lElN4vQExRp0IZwNuUUN)

## 📄 Licença

Esse projeto está sob a licença MIT.

---

Feito com ♥ by GRF 👋🏻  