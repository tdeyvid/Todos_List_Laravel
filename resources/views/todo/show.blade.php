<x-layout title='Visualizar Tarefas'>

    <section>
        <h1 class="title">Tarefa Diaria - Selecionada</h1>
        <hr><br>
        <a href="{{ route('todo.index') }}">Consultar (voltar)</a>
        <br><br>
 
        <article>
            <p><strong>Codigo:</strong> {{ $todo->id }}</p>
            <p><strong>Tarefa:</strong> {{ $todo->title }}</p>
            <p><strong>Data de criação:</strong>  {{ $todo->date_time }}</p> <br>
        </article>

    </section>

</x-layout>