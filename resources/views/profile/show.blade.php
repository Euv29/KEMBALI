<x-layouts.app title="Home">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <section class="user-post-area">
            @foreach ($user->posts as $pergunta)
                <section class="post-card" style="margin-bottom: 4rem">

                    <section class="header-card flex align-center">
                        <p id="date">{{ $pergunta->updated_at->format('M j, Y') }}</p>

                        <a href="/disciplinas/{{ $pergunta->disciplina->id }}"
                            id="disciplina">{{ $pergunta->disciplina->nome_disciplina }}</a>
                    </section>

                    <section class="body-card">
                        <a class="pergunta normal-text" href="/perguntas/{{ $pergunta->id }}">
                            {{ $pergunta->pergunta }}
                        </a>
                    </section>
                </section>
            @endforeach
        </section>
    </main>

    <x-footer />
</x-layouts.app>
