<x-layouts.app title="Meu Perfil">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <x-flash-message />


        <section class="dashboard-card flex col align-center">
            <section class="dashboard-header flex col align-center">
                <section class="user-image-area">
                    <img src="/img/perfil/{{ auth()->user()->imagem }}" alt="Foto perfil"
                        class="profile-pic"onclick="showMenu()">
                </section>
                <p class="dash-username">{{ $usuario->name }}</p>
            </section>

            <section class="post-area">

                @foreach ($perguntas as $pergunta)
                    <section class="post-card">

                        <section class="header-card flex align-center space-between">
                            <section class="flex align-center space-between">
                                <p id="date">{{ $pergunta->updated_at->format('M j, Y') }}</p>

                                <a href="/disciplinas/{{ $pergunta->disciplina->id }}"
                                    id="disciplina">{{ $pergunta->disciplina->nome_disciplina }}</a>
                            </section>


                            @auth
                                <section class="more flex align-center">
                                    <ul class="more-list flex align-center">
                                        <li class="more-list-element flex align-center">
                                            <a href="perguntas/editar/{{ $pergunta->id }}" class="operacoes-btn">Editar</a>
                                        </li>

                                        <li class="flex align-center">
                                            <form action="/perguntas/{{ $pergunta->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="operacoes-btn">Apagar</button>
                                            </form>
                                        </li>
                                    </ul>
                                </section>
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
        </section>

    </main>

    <x-footer />

</x-layouts.app>
