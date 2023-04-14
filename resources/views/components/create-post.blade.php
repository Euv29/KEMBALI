<section class="create-post-area">

    <form action="{{ route('post.store') }}" method="post" enctype='multipart/form-data'>
        @csrf

        <section class="tag-create flex align-center space-between">

            <section class="select-disciplina flex align-center ">
                <ion-icon name="bookmark-outline" id="tag-icon" class="post-icon"></ion-icon>

                <select name="disciplina" class="disciplina-select" required>
                    <option class="disciplinas" disabled selected>Selecione a disciplina</option>
                    @foreach ($disciplinas as $disciplina)
                        <option class="disciplinas" value="{{ $disciplina->id }}">{{ $disciplina->nome_disciplina }}
                        </option>
                    @endforeach
                </select>
            </section>

            <a href="/disciplinas/criar" class="disciplina-criar">Criar disciplina</a>
        </section>

        <section class="create-post-body">

            <textarea name="post" id="post" class="create-post-textarea" placeholder="Escreva aqui a sua dúvida" required>{{ old('post') }}</textarea>

            <section class="add-zone">

                <section class="image-container flex space-between">
                    <input type="file" name="img" id="img" accept=".png, .jpg, .jpeg">
                    <section class="img-area flex col justify-center align-center">
                        <img src="" class="image-preview">
                    </section>

                    <label class="select-image flex align-center" for="img">
                        Adicionar Imagem
                        <ion-icon name="attach-outline" class="post-icon"></ion-icon>
                    </label>
                </section>
            </section>
        </section>

        <section class="flex justify-center col align-center errors">
            <x-input-error :messages="$errors->get('disciplina')" class="mt-2 error" />
            <x-input-error :messages="$errors->get('post')" class="mt-2 error" />
        </section>

        <section class="footer-post-area flex space-between">
            <button type="submit" id="btn-create" class="flex justify-center align-center">
                <p>Publicar</p>
            </button>
        </section>
    </form>
</section>
