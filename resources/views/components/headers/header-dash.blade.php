<header class="header-container flex space-between align-center">

    <section class="logo flex space-between">
        <a href="" class="notification-left">
            <ion-icon name="notifications" class="header-icon"></ion-icon>
        </a>

        <a href="{{ route('post.index') }}">
            Kembali
        </a>
    </section>

    <nav class="navbar flex align-center justify-end">

        @guest
            <ul class="flex space-evenly align-center normal-text" id="mobile-list">
                <li><a href="{{ route('register') }}" class="list-link">Criar Conta</a></li>
                <li><a href="{{ route('login') }}" class="list-link">Entrar</a></li>
            </ul>
        @endguest

        @auth
            <ul class="flex space-evenly align-center normal-text" id="mobile-list">
                <li><a href="{{ route('post.index') }}" class="list-link">Home</a></li>
                <li><a href="{{ route('disciplina.index') }}" class="list-link">Disciplinas</a></li>
            </ul>

            <a href="{{ route('logout') }}" class="flex align-center" id="mobile-list"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <p>Sair</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        @endauth
    </nav>
</header>
