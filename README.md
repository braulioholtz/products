## Sobre o Projeto

Utilizei uma abordagem usando Laravel JetStream, usando vue.js.

A estrutura simples contendo produtos e relacionando com categorias pelo category_id

Produtos retorna o atributo category_name com o nome da categoria pertencente.

É possivel acessar a API através dos caminhos
- /api/products/
- /api/products/{id}
- /api/categories/
- /api/categories/{id}

No formulário de produtos, o select de categorias consome da chamada de API categories.


## Rodar o projeto

- _npm install_
- _php artisan serve_
- _php artisan migrate_ para criar as tabelas

