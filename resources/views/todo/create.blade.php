<x-layout title='Cadastrar Tarefa'>

        <section>
            <h1 class="title">Cadastrar Tarefas Diarias</h1>
            <hr><br>
            
            <form action="{{ route('todo.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nova Tarefa <br> </label>
                    <input type="text" name="title" id="title" placeholder="O que você precisa fazer?"  class="campo" required autofocus /><br>
                </div>

                <input type="submit" value="Cadastrar" class="bnt" name="cadastrar">
                <input type="reset" value="Limpar" class="bnt">
            </form>
            <br><br>
        
        </section>

    </div>

</x-layout>