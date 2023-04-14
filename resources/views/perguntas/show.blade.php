<x-layouts.app title="Post">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <x-flash-message />

        <section class="post-area-show">

            <section class="post-card-show">

                <section class="header-card flex align-center">
                    <p id="date">{{ $pergunta->updated_at->diffForHumans() }}</p>

                    <a href="/disciplinas/{{ $pergunta->disciplina->id }}"
                        id="disciplina">{{ $pergunta->disciplina->nome_disciplina }}</a>
                </section>

                <section class="body-card">
                    <p class="pergunta normal-text">{{ $pergunta->pergunta }}</p>

                    @if ($pergunta->imagem)
                        <section class="imagem-area flex justify-center">
                            <img src="/img/post/{{ $pergunta->imagem }}" class="post-image-show">
                        </section>

                        <section class="post-imagem-pop-up">
                            <span>&times;</span>
                            <img src="" class="imagem-popup">
                        </section>
                    @endif
                </section>

                <section class="footer-card flex align-center space-between">
                    <section class="user-id flex align-center">
                        <section class="profile-pic-area">
                            <img src="/img/perfil/{{ $pergunta->user->imagem }}" alt="foto de perfil"
                                class="profile-pic">
                        </section>

                        <section class="user-data">
                            <a href="" class="username">{{ $pergunta->user->name }}</a>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section class="create-comment">
            <form action="/perguntas/{{ $pergunta->id }}/comentarios"
                method="post"class="flex align-center space-between" enctype="multipart/form-data">
                @csrf

                <input type="text" name="usuarioPost" id="usuarioPost" hidden value="{{ $pergunta->user_id }}">

                <textarea name="comentario" id="comentario" placeholder="Digite o seu comentário"></textarea>

                <section class="imagem-comentario flex align-center">

                    <input type="file" name="img-comentario" id="img-comentario" accept=".png, .jpg, .jpeg">

                    <label for="img-comentario" class="comentario-imagem-label flex align-center">
                        <ion-icon name="attach-outline" class="post-icon"></ion-icon>
                    </label>

                </section>

                <button type="submit" class="btn-send">
                    <ion-icon name="send" class="post-icon"></ion-icon>
                </button>
            </form>
        </section>

        <section class="comment-area">

            @foreach ($pergunta->comentarios->reverse() as $comentario)
                <section class="comment-card" id="comentario{{ $comentario->id }}">

                    <section class="header-card flex align-center space-between">
                        <p id="date" class="operacoes-btn">{{ $comentario->updated_at->diffForHumans() }}</p>

                        @if (auth()->user()->id == $comentario->user_id)
                            <section class="more flex align-center">
                                <ul class="more-list flex align-center">
                                    <li class="more-list-element flex align-center">
                                        <a
                                            href="/perguntas/comentarios/editar/{{ $comentario->id }}"class="operacoes-btn">Editar</a>
                                    </li>

                                    <li class="flex align-center">
                                        <form action="/comentarios/{{ $comentario->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="operacoes-btn">Apagar</button>
                                        </form>
                                    </li>
                                </ul>
                            </section>
                        @endif

                    </section>

                    <section class="body-card">
                        <p class="pergunta normal-text">
                            {{ $comentario->comentario }}
                        </p>

                        @if ($comentario->imagem)
                            <section class="imagem-area flex justify-center">
                                <img src="/img/comentario/{{ $comentario->imagem }}" class="post-image-show">
                            </section>

                            <section class="post-imagem-pop-up">
                                <span>&times;</span>
                                <img src="" class="imagem-popup">
                            </section>
                        @endif
                    </section>

                    <section class="footer-card flex align-center space-between">
                        <section class="user-id flex align-center">
                            <section class="profile-pic-area">
                                <img src="/img/perfil/{{ $comentario->user->imagem }}" alt="foto de perfil"
                                    class="profile-pic">
                            </section>

                            <section class="user-data">
                                <a href="" class="username">{{ $comentario->user->name }}</a>
                            </section>
                        </section>
                    </section>
                </section>
            @endforeach

        </section>

    </main>

    <x-footer />
</x-layouts.app>
