## Bem vindo ao Projeto DIALHOST

***

* **PHP** 7.3.2
* **Laravel Framework** 5.8.3

***

Testes realizados com **POSTMAN** 6.7.4 [https://www.getpostman.com/](https://www.getpostman.com/)
> `Dentro da pasta PUBLIC do projeto exite o arquivo: TesteDIALHOSTpostman.json (com as configurações dos testes)`

***

Foram criados arquivos de MIGRATION e SEED

***

* **Incialização do PROJETO:**
* composer install
* composer update
* php artisan migrate
* php artisan db:seed --class=ProdutosSeeder
* php artisan serve

***

Métodos CRUD do PROJETO

* > `GET    : http://127.0.0.1:8000/api/produtos/`
* > `GET    : http://127.0.0.1:8000/api/produtos/{ID_DO_PRODUTO}`
* > `DELETE : http://127.0.0.1:8000/api/produtos/{ID_DO_PRODUTO}`
* > `POST   : http://127.0.0.1:8000/api/produtos/ --- JSON: {"nome":"TV SMART SAMSUNG 3456","valor":5500.00,"tipo_produto":1}`
* > `PUT    : http://127.0.0.1:8000/api/produtos/{ID_DO_PRODUTO} --- JSON: {"nome":"TV SMART SAMSUNG 3456","valor":5500.00,"tipo_produto":1}`
