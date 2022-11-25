<x-layout title='Editar Tarefa'>

    <section>
        <h1 class="title">Editar Tarefas Diarias</h1>
        <hr><br>

        <form action="{{ route('todo.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Editar Tarefa <br> </label>
                <input type="text" name="title" id="title" value="{{ $todo->title }}" placeholder="O que você precisa fazer?" class="campo" /><br>
            </div>

            <input type="submit" value="Atualizar" class="bnt" name="Atualizar">
            <input type="reset" value="Limpar" class="bnt">
        </form>
        <br><br>

    </section>

    </div>

</x-layout>