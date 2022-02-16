<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About This Challenge

_LARAVEL_

-   criar um novo projeto em LARAVEL
-   conectar ao banco de dados
-   criar uma Model de Categorias
-   Essa Categoria deve ser única e isso deve ser garantido no banco de dados
-   expor uma API de categorias implementando a segurança padrão do LARAVEL
    -   DEVE criar uma categoria
    -   DEVE selecionar todas as categorias cadastradas
    -   DEVE selecionar uma categoria através de um ID
    -   DEVE excluir uma categorias através de um ID

## Project:

Laravel 8 API: users (default) and categories

### To Run

-   Requirements: Docker

Clone
`git clone https://github.com/estudos-2022/pair-programing.git pair-programing`

Enter in directory root of project
`cd pair-programing`

Install depedencies
`composer install`

Inicializa os serviços
`./vendor/bin/sail up`

Copy the variable of enviroment, and revise the config
`cp .env.example .env`

Create the key
`./vendor/bin/sail php artisan key:generate`

Run migration to create the tables of database and seed together
`./vendor/bin/sail php artisan migrate::refresh --seed`

-   About Sail: https://laravel.com/docs/8.x/sail

After, visit the following address: http://localhost

## License

This test is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
