<x-layouts.app title="Editar Post">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <section class="create-post-area">

            <form action="/perguntas/actualizar/{{ $pergunta->id }}" method="post" enctype='multipart/form-data'>
                @csrf
                @method('PUT')

                <section class="tag-create flex align-center space-between">
                    <section class="select-disciplina flex align-center ">

                        <ion-icon name="bookmark-outline" id="tag-icon" class="post-icon"></ion-icon>

                        <select name="disciplina" class="disciplina-select" required>
                            <option class="disciplinas" selected value="{{ $pergunta->disciplina_id }}">
                                {{ $pergunta->disciplina->nome_disciplina }}</option>

                            <optgroup label="Mais Disciplinas">
                                @foreach ($disciplinas as $disciplina)
                                    @if ($disciplina->id != $pergunta->disciplina_id)
                                        <option class="disciplinas" value="{{ $disciplina->id }}">
                                            {{ $disciplina->nome_disciplina }}
                                        </option>
                                    @endif
                                @endforeach
                            </optgroup>
                        </select>
                    </section>

                    <a href="/disciplinas/criar" class="disciplina-criar">Não encontrou a disciplina?</a>
                </section>

                <section class="create-post-body">
                    <textarea name="post" id="post" class="create-post-textarea" placeholder="Escreva aqui a sua dúvida" required>{{ $pergunta->pergunta }}</textarea>

                    <section class="add-zone flex justify-end">

                        <section class="image-container flex space-between">
                            <input type="file" name="img" id="img" accept=".png, .jpg, .jpeg"
                                value="{{ $pergunta->imagem }}">
                            <section class="img-area flex col justify-center align-center">
                                <img src="/img/post/{{ $pergunta->imagem }}" class="image-preview image-preview-edit">
                            </section>

                            <label class="select-image flex align-center" for="img">
                                Trocar Imagem
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

                    <button type="submit" id="btn-create">Actualizar</button>
                </section>

            </form>
        </section>
    </main>
</x-layouts.app>
