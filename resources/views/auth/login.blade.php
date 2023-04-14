<x-layouts.app title="Entrar">

    <x-headers.header-app />

    <main class="main-container flex align-center col main-form">

        <form action="/login" method="POST"
            class="form-login flex justify-center align-center"enctype="multipart/form-data">
            @csrf

            <section class="form-inputs flex col align-center justify-center">
                <section class="form-title">
                    <h1>Entrar</h1>
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

                <button type="submit" class="btn-submit">Entrar</button>

                <section class="register-link-area">
                    <a href="/register" class="register-link">Não tem uma conta?</a>
                </section>

            </section>
        </form>
    </main>
</x-layouts.app>
