<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About This Challenge

_SOLICITAÇÕES (EM PORTUGUÊS)_

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
-   This project use the port 80 and 3306
-   About Sail: https://laravel.com/docs/8.x/sail

Clone
`git clone https://github.com/estudos-2022/pair-programing.git pair-programing`

Enter in directory root of project
`cd pair-programing`

Install depedencies
`composer install`

Start the services
`./vendor/bin/sail up`

Run migration to create the tables of database and seed together
`./vendor/bin/sail php artisan migrate:refresh --seed`

After, visit the following address:

-   GET http://localhost/api/categorias (list all categories)
-   GET http://localhost/api/categorias/1 (list the category with id = 1)

More tests use the file teste.http inside VsCode or test with Postman/Insomnia

## License

This test is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
