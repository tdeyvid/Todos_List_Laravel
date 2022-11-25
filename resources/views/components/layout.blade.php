<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/79be424806.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container">
           <nav>
            <ul class="menu">
                <a href="{{ route('todo.create') }}">
                    <li>Cadastrar Tarefa</li>
                </a>
                <a href="{{ route('todo.index') }}">
                    <li>Consultar Tarefas</li>
                </a>

            </ul>
        </nav>

        {{$slot}}

    </div>


</body>

</html>