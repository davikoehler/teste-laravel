## Descrição do Projeto
Esse projeto foi feito com base em um teste técnico onde fiz um pequeno CRUD de usuários com a parte de autenticação, onde foi feito de forma monolítica e utilizando o framework Laravel com Blade e TailwindCSS para me auxiliar na parte da estilização do projeto.

## Passo a passo para iniciar o Projeto

Para inicializar o projeto, realize as seguintes etapas:

- Dê um git clone {url} {nomepasta} no seu projeto ou faça o download dele e o descompacte.
- Entre na pasta do projeto
- Copie o arquivo .env.example ou o renomeie para .env

Após isso, você deve abrir o terminal e rodar os seguintes comandos nessa ordem:
- composer install
- npm install
- php artisan key:generate

Após rodar esses comandos, você deve criar uma base de dados chamada crud_usuarios ou se quiser chamar por outro nome, você deve renomear o DB_DATABASE que está localizado no .env

Depois de criada a sua base de dados, no terminal, rode os seguintes comandos:
- php artisan migrate --seed
- php artisan serve

Por último e não menos importante, abra outra instância do terminal e rode o comando npm run dev para inicializar a parte do front.

### Tecnologias Utilizadas
- PHP com o framework Laravel
- TailwindCSS
- MySQL
