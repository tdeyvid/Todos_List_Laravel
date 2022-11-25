1 - Criar projeto:
* - composer create-project laravel/laravel todolist

3 - Instalar o composer - laravel
* - composer global require laravel/installer

2 - Abrir o projeto
* - php artisan serve

4 - Criação do Controlle
* - php artisan make:controller TodolistController --resource

5 - Criar as tabelas
* - php artisan make:migration create_todos_table
* - php artisan migrate

Criar a base de dados 'atividades' no servidor MySQL

Alterar as credenciais do banco de dados no arquivo ".env":
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=atividades
DB_USERNAME=root
DB_PASSWORD=

******************* Tabela Todos ***************
 public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title',220);
            $table->datetime('date_time');
            $table->timestamps();
        });
    }
********************************************
Acessar no navegador
http://127.0.0.1:8000/
http://127.0.0.1:8000/cadastrar-tarefa
http://127.0.0.1:8000/visualizar-tarefas