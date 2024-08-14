
# Setup Docker Laravel 11 com PHP 8.3
[Assine a Academy, e Seja VIP!](https://academy.especializati.com.br)

### Passo a passo
Clone Repositório
```sh
git clone -b laravel-11-with-php-8.3 https://github.com/especializati/setup-docker-laravel.git app-laravel
```
```sh
cd app-laravel
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)
```sh
touch database/database.sqlite
```

Rodar as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)

Falta criar as tabelas tipo_vendas, funcionarios e Produtos (Preencher os campos nos modelos e nas migrations)

posteriormente, necessário definir o modo de relacionamento entre tabelas.

#implementação

Nos controllers dos modelos, foi utilizado o metodo "store" como void, para que possa ser acessado por outros controllers, de forma a adicionar os registros no banco de dados seguindo as questões de hierarquia da base de dados, e evitando a necessidade de implementação de outros metodos para a realização da mesma tarefa.

Nos controllers dos modelos, foi utilizado o metodo "show" com retorno do modelo relacionado ao objeto em questão, para facilitar o acesso por outros controllers e sumissão de formulários.

Ja para o metodo edit, como é apenas uma busca na base de dados e uma devolução para visualização e possivelmente edição de dados, o retorno foi definido como view

para o metodo update, foi utilizado o retorno booleando, desta forma, retorna verdadeiro se conseguiu atualizar os dados, ou falso se o objeto procurado nao foi encontrado.

Para o metodo destroy, foi utilizado o retorno booleano, retornando verdadeiro caso o registro tenha sido apagado, e falso caso encontre alguma falha durante o processo

Vale ressaltar que estamos utilizando o SoftDeletes para a realização do preenchimento da coluna "deleted_at", e quando esta coluna estiver preenchida, os dados não serão exibidos. Não estamos removendo dados das tabelas mesmo com solicitação de delete do usuario.
 
