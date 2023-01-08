<img src="https://github.com/pr2tik1/pr2tik1/blob/master/IMAGE-NAME">

### Olá 👋
 
Me chamo Fábio, sou formado em Gestão da Tecnologia da Informação e Programador PHP/Laravel.</br>
Este é um CRUD muito básico, mas que traz a lógica e o entendimento por traz do ecosistema do Laravel. Este CRUD não tem nenhum tipo de relacionamneto e nehum tipo de</br> verificação de dados(até o momento 07/01/2023).</br>
Porém, é de muita valia para entendimento básico dos Verbos HTTP( Get, Put, Delete e Post) e como a regra de negocio troca informações através das Url's( Sei que não é boa prática, mas como disse:'Este é um CRUD muito básico').</br>
Se voçe tiver algum conhecimento com Laravel vai entender facilmente o que está acontecendo em cada arquivo.</br>

Vamos lá...</br>

Iniciar o Projeto.</br>
No Terminal CMD - PowerShell, Outros... Vá até a Pasta do seu servidor local(laragon, xamp, lamp, outros)vá até a pasta RAIZ(www, htdocs).</br>
1 - Crie uma pasta 'projects por exemplo', e clone o Projeto na pasta escolhida do seu servidor -> no terminal rode o comando -> 'git clone https://github.com/fsalles2022/crudl9.git'</br>
2 - Acesse o projeto -> 'cd projects', depois 'cd crudl9'.</br>
3 - Abra o projeto no seu editor de preferencia, se voce usa o Vscode rode no terminal mesmo o comando: ' code .', que o projeto abrirá automaticamente no VsCode que está fechado.</br>
4 - Com o VsCode aberto rode com o prompt em cima de algum arquivo o comando 'ctrl+j' para abrir o terminal do seu VsCode(Opcional abrir pelo terminal).</br>
5 - Faça uma cópia do arquivo .env e renomeie como .env.example, se preferir rode o comando -> ' cp .env.example .env ' no terminal.</br>
Verifique a criação do arquivo na estrutura de pastas do projeto lado esquerdo do editor geralmente .</br>
6 - No arquivo .env.example verifique suas credenciais de banco -> </br>
                        DB_CONNECTION=mysql</br>
                        DB_HOST=127.0.0.1</br>
                        DB_PORT=3306</br>
                        DB_DATABASE=nome_do_banco_exemplo_laravel</br>
                        DB_USERNAME=root</br>
                        DB_PASSWORD=</br>
7 - Crie o Banco no PhpMyAdmin com o mesmo nome que foi definido no DB_DATABASE= .</br>                    
8 - No terminal rode o comando 'php artisan serve' </br>
9 - Popule o banco com dados Fakes -> Vá até o arquivo App\database\seeders\DatabaseSeeder.php e descomente o trecho '//\App\Models\User::factory(10)->create();'</br>
10 - Volte para o terminal e rode o comando ' php artisan migrate --seed'.</br>
11 - Verifique se o banco esta populado com dados fakes na tabelas users a factory irá criar 10 usuarios User::factory(10)->create.</br>
12 - Vá até o Browser(Google) acesse: http://localhost:8000/usuarios</br>

* As Url's são:</br>
http://localhost:8000/usuarios</br>
http://localhost:8000/usuarios/{id}</br>
http://localhost:8000/usuario/1</br>
http://localhost:8000/usuarios/edit{id}</br>
http://localhost:8000/usuario/edit/1</br>
http://localhost:8000/usuarios/adicionar</br>


Arquivos criados até o momento:</br>

Controlller</br>
*App\htttp\Controllers\HomeController</br>

Views</br>
*\Resourses\views\user{</br>
    create.blade.php</br>
    edit.blade.php</br>
    index.blade.php</br>
    show.blade.php</br>
    update.blade</br>
    }</br>

Routes   </br>
*\App\routes\web{</br>
Route::get('/usuarios', [HomeController::class, 'index'])->name('user.index');</br>
Route::get('/usuario/{id}', [HomeController::class, 'show'])->name('user.show');</br>
Route::get('/usuario/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');</br>
Route::put('/usuario/update/{id}', [HomeController::class, 'update'])->name('user.update');</br>
Route::delete('/usuario/delete/{id}', [HomeController::class, 'destroy'])->name('user.destroy');</br>
Route::get('/usuarios/adicionar', [HomeController::class, 'create'])->name('user.create');</br>
Route::post('/usuarios/adicionar', [HomeController::class, 'store'])->name('user.store');</br>

    }</br>

Seeders</br>
*\App\database\seeders{</br>
\App\Models\User::factory(10)->create();</br>
 }</br>


- 🤝 Este 

![YOUR github stats](https://github-readme-stats.vercel.app/api?username=fsalles2022)</br>

[<img src="https://img.shields.io/badge/twitter-%231DA1F2.svg?&style=for-the-badge&logo=twitter&logoColor=white" />](https://twitter.com/USERNAME) [<img src="https://img.shields.io/badge/medium-%2312100E.svg?&style=for-the-badge&logo=medium&logoColor=white" />](https://medium.com/USERNAME)  [<img src="https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white" />](https://www.linkedin.com/in/https://www.linkedin.com/in/fabio-salles-47a85988//) [<img src = "https://img.shields.io/badge/instagram-%23E4405F.svg?&style=for-the-badge&logo=instagram&logoColor=white">](https://www.instagram.com/USERNAME/) [<img src = "https://img.shields.io/badge/facebook-%231877F2.svg?&style=for-the-badge&logo=facebook&logoColor=white">](https://www.facebook.com/USERNAME)