<x-layouts.app title="Disciplinas - {{ $disciplina->nome_disciplina }}">
    <x-headers.header-app />

    <main class="main-container flex align-center col">
        <section class="post-area">
            @foreach ($perguntas as $pergunta)
                <section class="post-card">

                    <section class="header-card flex align-center space-between">
                        <section class="flex align-center space-between">
                            <p id="date">{{ $pergunta->updated_at->diffForHumans() }}</p>

                            <a href="/disciplinas/{{ $pergunta->disciplina->id }}"
                                id="disciplina">{{ $pergunta->disciplina->nome_disciplina }}</a>
                        </section>


                        @auth
                            {{-- <section class="more flex align-center">
                                @if (auth()->user()->id != $pergunta->user->id)
                                    <a href="" class="operacoes-btn">Denunciar</a>
                                @endif
                            </section> --}}
                        @endauth
                    </section>

                    <section class="body-card">
                        <a class="pergunta normal-text" href="/perguntas/{{ $pergunta->id }}">
                            {{ $pergunta->pergunta }}
                        </a>
                    </section>

                    <section class="footer-card flex align-center space-between">
                        <section class="user-id flex align-center">
                            <section class="post-profile-pic-area">
                                <img src="/img/perfil/{{ $pergunta->user->imagem }}" alt="foto de perfil"
                                    class="profile-pic">
                            </section>

                            <section class="user-data">
                                <p class="username">{{ $pergunta->user->name }}</p>
                            </section>
                        </section>

                        <a href="/perguntas/{{ $pergunta->id }}" class="icon-link">
                            <ion-icon name="chatbubble-outline" class="post-icon"></ion-icon>
                        </a>
                    </section>
                </section>
            @endforeach
        </section>
    </main>

    <x-footer />
</x-layouts.app>
