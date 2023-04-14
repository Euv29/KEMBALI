<x-layouts.app title="Reportar">
    <x-headers.header-app />

    <main class="main-container flex col align-center">

        <h1 class="title">Reportar Falha do Sistema</h1>

        <section class="create-post-area reportar-area">

            <form action="{{ route('reportar.store') }}" method="post" enctype='multipart/form-data'>
                @csrf

                <textarea name="falha" id="post" class="create-post-textarea" placeholder="Escreva aqui a falha identificada"
                    required>{{ old('post') }}</textarea>

                <section class="add-zone flex justify-end">
                    <x-input-error :messages="$errors->get('disciplina')" class="mt-2 error" />
                </section>

                <section class="footer-post-area flex space-between">
                    <button type="submit" id="btn-create" class="flex justify-center align-center report-btn">
                        <p>Enviar</p>
                    </button>
                </section>

            </form>
        </section>
    </main>

    <x-footer />
</x-layouts.app>
