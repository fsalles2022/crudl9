<img src="https://github.com/pr2tik1/pr2tik1/blob/master/IMAGE-NAME">

### Olá 👋
 
Me chamo Fábio, sou formado em Gestão da Tecnologia da Informação e Programador PHP/Laravel.
Este é um CRUD muito básico, mas que traz a lógica e o entendimento por traz do ecosistema do Laravel. Este CRUD não tem nenhum tipo de relacionamneto e nehum tipo de verificação de dados(até o momento 07/01/2023).
Porém, é de muita valia para entendimento básico dos Verbos HTTP( Get, Put, Delete e Post) e como a regra de negocio troca informações através das Url's( Sei que não é boa prática, mas como disse:'Este é um CRUD muito básico').
Se voçe tiver algum conhecimento com Laravel vai entender facilmente o que está acontecendo em cada arquivo.

Vamos lá...

Iniciar o Projeto.
No Terminal CMD - PowerShell, Outros... Vá até a Pasta do seu servidor local(laragon, xamp, lamp, outros)vá até a pasta RAIZ(www, htdocs).
1 - Crie uma pasta 'projects por exemplo', e clone o Projeto na pasta escolhida do seu servidor -> no terminal rode o comando -> 'git clone https://github.com/fsalles2022/crudl9.git'
2 - Acesse o projeto -> 'cd projects', depois 'cd crudl9'.
3 - Abra o projeto no seu editor de preferencia, se voce usa o Vscode rode no terminal mesmo o comando: ' code .', que o projeto abrirá automaticamente no VsCode que está fechado.
4 - Com o VsCode aberto rode com o prompt em cima de algum arquivo o comando 'ctrl+j' para abrir o terminal do seu VsCode(Opcional abrir pelo terminal).
5 - Faça uma cópia do arquivo .env e renomeie como .env.example, se preferir rode o comando -> ' cp .env.example .env ' no terminal.
Verifique a criação do arquivo na estrutura de pastas do projeto lado esquerdo do editor geralmente .
6 - No arquivo .env.example verifique suas credenciais de banco -> 
                        DB_CONNECTION=mysql
                        DB_HOST=127.0.0.1
                        DB_PORT=3306
                        DB_DATABASE=nome_do_banco_exemplo_laravel
                        DB_USERNAME=root
                        DB_PASSWORD=
7 - Crie o Banco no PhpMyAdmin com o mesmo nome que foi definido no DB_DATABASE= .                    
8 - No terminal rode o comando 'php artisan serve' 
9 - Popule o banco com dados Fakes -> Vá até o arquivo App\database\seeders\DatabaseSeeder.php e descomente o trecho '//\App\Models\User::factory(10)->create();'
10 - Volte para o terminal e rode o comando ' php artisan migrate --seed'.
11 - Verifique se o banco esta populado com dados fakes na tabelas users a factory irá criar 10 usuarios User::factory(10)->create.
12 - Vá até o Browser(Google) acesse: http://localhost:8000/usuarios

* As Url's são:
http://localhost:8000/usuarios
http://localhost:8000/usuarios/{id}
http://localhost:8000/usuario/1
http://localhost:8000/usuarios/edit{id}
http://localhost:8000/usuario/edit/1
http://localhost:8000/usuarios/adicionar


Arquivos criados até o momento:

Controlller
*App\htttp\Controllers\HomeController

Views
*\Resourses\views\user{
    create.blade.php
    edit.blade.php
    index.blade.php
    show.blade.php
    update.blade
    }

Routes   
*\App\routes\web{
Route::get('/usuarios', [HomeController::class, 'index'])->name('user.index');
Route::get('/usuario/{id}', [HomeController::class, 'show'])->name('user.show');
Route::get('/usuario/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::put('/usuario/update/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/usuario/delete/{id}', [HomeController::class, 'destroy'])->name('user.destroy');
Route::get('/usuarios/adicionar', [HomeController::class, 'create'])->name('user.create');
Route::post('/usuarios/adicionar', [HomeController::class, 'store'])->name('user.store');

    }

Seeders
*\App\database\seeders{
\App\Models\User::factory(10)->create();
 }


- 🤝 Este 

I am recent engineering graduate looking for opportunities and collabaration in projects related to data science and deep learning.
- 🔭 I’m currently working on image classification (also, I am brushing up my data structures and algorithms skills regularly).
- 🌱 I’m currently learning Computer Vision and Deep Learning techniques using PyTorch.
- 🤝 I’m looking to collaborate on data science and deep learning projects.

![YOUR github stats](https://github-readme-stats.vercel.app/api?username=USERNAME)

[<img src="https://img.shields.io/badge/twitter-%231DA1F2.svg?&style=for-the-badge&logo=twitter&logoColor=white" />](https://twitter.com/USERNAME) [<img src="https://img.shields.io/badge/medium-%2312100E.svg?&style=for-the-badge&logo=medium&logoColor=white" />](https://medium.com/USERNAME)  [<img src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />](https://www.linkedin.com/in/USERNAME/) [<img src = "https://img.shields.io/badge/instagram-%23E4405F.svg?&style=for-the-badge&logo=instagram&logoColor=white">](https://www.instagram.com/USERNAME/) [<img src = "https://img.shields.io/badge/facebook-%231877F2.svg?&style=for-the-badge&logo=facebook&logoColor=white">](https://www.facebook.com/USERNAME)