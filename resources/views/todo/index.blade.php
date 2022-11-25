
<x-layout title='Consultar Tarefas'>

    <section>
        <h1 class="title">Lista de Tarefas Diarias</h1>
        <hr><br>
        @include('components/flash-message')

        <form method="get" action="">
            <div class="form-group">

                <label class="pesquisar">Pesquisar:</label><br>
                <input type="text" id="search" name="search" class="campo_pesquisar" maxlength="40" requiredrequired autofocus />
                <br>
                <select class="campo_select" name="seletor">
                    <option value="title">Tarefa</option>
                    <option value="date_time">Data de criação</option>
                </select>

                <input type="submit" value="Pesquisar" class="bnt_pesquisar">
                <input type="reset" value="Limpar" class="bnt_pesquisar">

            </div>
        </form>
        <br>
        <p style='color:green;'> Pesquisa: <strong> {{ $count }} </strong> registros encontrados com a palavra: <strong>{{ $search }} </strong>.</p><br>
     
        @foreach ($todos as $todos)
        <article>
            <p>Codigo: {{ $todos->id }}</p>
            <p>Tarefa: {{ $todos->title }}</p>
            <p><strong>Data de criação:</strong>  {{ $todos->date_time }}</p>
            <br>
            <div class="form-todos">
                <button type="button" class="bnt_todos">
                    <a href="{{ route('todo.show', $todos->id) }}" class="todos" >Visualizar</a>
                </button>&nbsp;

                <button type="button" class="bnt_todos">
                    <a href="{{ route('todo.edit', $todos->id) }}" class="todos">Editar</a>
                </button>&nbsp;

                <form action="{{ route('todo.destroy', $todos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bnt_todos">Apagar</button>
                </form>
            </div>

        </article>
        @endforeach

    </section>

</x-layout>