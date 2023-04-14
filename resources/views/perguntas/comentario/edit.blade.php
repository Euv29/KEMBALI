<x-layouts.app title="Editar comentário">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <x-flash-message />

        <section class="post-area-show">

            <section class="post-card-show">

                <section class="header-card flex align-center">
                    <p id="date">{{ $comentarioEditar->post->updated_at->diffForHumans() }}</p>

                    <a href="/disciplinas/{{ $comentarioEditar->post->disciplina->id }}"
                        id="disciplina">{{ $comentarioEditar->post->disciplina->nome_disciplina }}</a>
                </section>

                <section class="body-card">
                    <p class="pergunta normal-text">{{ $comentarioEditar->post->pergunta }}</p>

                    @if ($comentarioEditar->post->imagem)
                        <section class="imagem-area flex justify-center">
                            <img src="/img/post/{{ $comentarioEditar->post->imagem }}" class="post-image-show">
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
                            <img src="/img/perfil/{{ $comentarioEditar->post->user->imagem }}" alt="foto de perfil"
                                class="profile-pic">
                        </section>

                        <section class="user-data">
                            <a href="" class="username">{{ $comentarioEditar->post->user->name }}</a>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section class="create-comment">
            <form action="/perguntas/comentarios/actualizar/{{ $comentarioEditar->id }}"
                method="post"class="flex align-center space-between" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="text" name="usuarioPost" id="usuarioPost" hidden value="{{ $comentarioEditar->post->user_id }}">

                <textarea name="comentario" id="comentario">{{ $comentarioEditar->comentario }}</textarea>

                <section class="imagem-comentario flex align-center">

                    <input type="file" name="img-comentario" id="img-comentario" accept=".png, .jpg, .jpeg"
                        value="{{ $comentarioEditar->imagem }}">

                    <label for="img-comentario" class="comentario-imagem-label flex align-center">
                        @if ($comentarioEditar->imagem)
                            <ion-icon name="checkmark-circle-outline" class="post-icon"></ion-icon>
                        @else
                            <ion-icon name="attach-outline" class="post-icon"></ion-icon>
                        @endif
                    </label>

                </section>

                <button type="submit" class="btn-send">
                    <ion-icon name="send" class="post-icon"></ion-icon>
                </button>
            </form>
        </section>
    </main>

    <x-footer />
</x-layouts.app>
