<x-layouts.app title="Criar Disciplina">

    <x-headers.header-app />


    <main class="main-container flex align-center col">

        <form class="create-disciplina-card flex col space-between align-center" method="POST"
            action="{{ route('disciplina.store') }}">

            @csrf
            <section class="form-title">
                <h1>Criar Disciplina</h1>
            </section>

            <section class="disciplina-create-body flex col align-center">

                <section class="group-input">
                    <input type="text" name="disciplina" :value="old('disciplina')" autocomplete="off" placeholder=" "
                        required>

                    <label for="email" class="label-email">
                        <span class="content-label">Nome da disciplina</span>
                    </label>
                </section>

                <section class="erros">
                    <x-input-error :messages="$errors->get('disciplina')" class="erro" />

                    @if (isset($erro))
                        <x-input-error :messages="$erro" />
                    @endif
                </section>
            </section>

            <button type="submit" class="btn-submit">Criar</button>

        </form>
    </main>
    <x-footer />
</x-layouts.app>
