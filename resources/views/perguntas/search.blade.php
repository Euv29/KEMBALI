<x-layouts.app title="Procurar">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <x-flash-message />

        <form action="" method="GET" id="search-form" class="flex align-center space-between">
            @csrf

            <select name="filtro" id="filtro" required>
                <option class="disciplinas" value="Posts">Posts</option>
                <option class="disciplinas" value="Disciplinas">Disciplinas</option>
            </select>

            <input type="search" name="search" id="search" placeholder="Pesquise Aqui...">
            <button type="submit" class="footer-icon flex align-center" id="search-btn">
                <ion-icon name="search-outline"></ion-icon>
            </button>
        </form>

        @if ($search && !$resultados->isEmpty())
            <section class="flex search-name">
                <p class="title texto-fixo">Resultados para:</p>
                <strong>
                    <p class="title">{{ $search }}</p>
                </strong>
            </section>
        @elseif ($search && $resultados->isEmpty())
            <section class="flex search-name">
                <p class="title texto-fixo">Sem resultados para:</p>
                <strong>
                    <p class="title">{{ $search }}</p>
                </strong>
            </section>
        @else
            <section class="flex search-name">
            </section>
        @endif

        <section class="post-area">

            @foreach ($resultados as $resultado)
                @if ($filtro == 'Disciplinas')
                    <ul class="disciplinas-lista">
                        <li class="flex align-center">
                            <ion-icon name="bookmark-outline" class="disciplina-resultado"></ion-icon>
                            <a
                                href="/disciplinas/{{ $resultado->id }}"class="disciplina-resultado">{{ $resultado->nome_disciplina }}</a>
                        </li>
                    </ul>
                @elseif ($filtro == 'Posts')
                    <section class="post-card">

                        <section class="header-card flex align-center space-between">
                            <section class="flex align-center space-between">
                                <p id="date">{{ $resultado->updated_at->diffForHumans() }}</p>

                                <a href="/disciplinas/{{ $resultado->disciplina->id }}"
                                    id="disciplina">{{ $resultado->disciplina->nome_disciplina }}</a>
                            </section>

                            @auth
                                {{-- <section class="more flex align-center">
                                    @if (auth()->user()->id != $resultado->user->id)
                                        <a href="">Denunciar</a>
                                    @endif
                                </section> --}}
                            @endauth

                        </section>

                        <section class="body-card">
                            <a class="pergunta normal-text" href="/perguntas/{{ $resultado->id }}">
                                {{ $resultado->pergunta }}
                            </a>
                        </section>

                        <section class="footer-card flex align-center space-between">
                            <section class="user-id flex align-center">
                                <section class="profile-pic-area">
                                    <img src="/img/perfil/{{ $resultado->user->imagem }}" alt="foto de perfil"
                                        class="profile-pic">
                                </section>

                                <section class="user-data">
                                    <a href="/users/{{ $resultado->user->id }}"
                                        class="username">{{ $resultado->user->name }}</a>
                                </section>
                            </section>

                            <a href="/resultados/{{ $resultado->id }}" class="icon-link">
                                <ion-icon name="chatbubble-outline" class="post-icon"></ion-icon>
                            </a>
                        </section>
                    </section>
                @endif
            @endforeach
        </section>
    </main>

    <x-footer />
</x-layouts.app>
