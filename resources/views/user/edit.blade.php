<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EditCrudL9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="h1 text-center mb-5 mt-5">Editar Usuários</div>

<<<<<<< HEAD
        <form method="post" action="{{route('user.update', $user->id)}}">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="Email1" class="form-label">Email</label>
                <input type="email" value="{{$user->email}}" class="form-control" id="Email" name="email" aria-describedby="emailHelp">
            </div>


            <button type="submit" class="btn btn-primary">Atualizar dados</button>
        </form>
=======
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>

                </tr>
            </thead>
            <tbody>


                <tr>
                    <th scope="row">{{$user->id }}</th>
                    <td>{{$user->name }}</td>
                    <td>{{$user->email }} </td>


                </tr>

            </tbody>
        </table>
>>>>>>> 07ff8c578b720f0460ce846da9d64e639ebf039f

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>