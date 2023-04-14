<x-layouts.app title="Criar Conta">
    <x-headers.header-app />

    <main class="main-container flex col align-center justify-center form-area">
        <form action="/register" method="POST" class="flex justify-center align-center"enctype="multipart/form-data">
            @csrf

            <section class="form-inputs-register flex col align-center">
                <section class="form-title">
                    <h1 id="register-title">Criar Conta</h1>
                </section>

                <section class="group-input-image flex col align-center">
                    <input type="file" name="image" id="image" placeholder=" ">

                    <section class="image-area">
                        <img src="/img/perfil/default-profile.png" id="default-img">
                    </section>

                    <label for="image" class="label-image">Carregar foto</label>
                </section>

                <section class="group-input">
                    <input type="text" name="name" autocomplete="off" placeholder=" " required>

                    <label for="name" class="label-email">
                        <span class="content-label">Nome de Usuário</span>
                    </label>
                </section>

                <section class="group-input">
                    <input type="email" name="email" autocomplete="off" placeholder=" " required>

                    <label for="email" class="label-email">
                        <span class="content-label">Email</span>
                    </label>
                </section>

                <section class="group-input">
                    <input type="password" name="password" placeholder=" " required>

                    <label for="password" class="label-email">
                        <span class="content-label">Senha</span>
                    </label>
                </section>

                <section class="group-input">
                    <input type="password" name="password_confirmation" placeholder=" " required>

                    <label for="password_confirmation" class="label-email">
                        <span class="content-label">Confirmar Senha</span>
                    </label>
                </section>

                <button type="submit" class="btn-submit" id="btn-submit-register">Registar</button>

            </section>
        </form>
    </main>
</x-layouts.app>
