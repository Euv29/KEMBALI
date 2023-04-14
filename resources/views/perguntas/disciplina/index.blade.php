<x-layouts.app title="Dashboard">
    <x-headers.header-app />

    <main class="main-container flex align-center col">

        <h1 class="title">Disciplinas Existentes</h1>

        <ul>
            @foreach ($disciplinas as $disciplina)
                <li><a href="/disciplinas/{{ disciplina->id }}">$disciplina</a></li>
            @endforeach
        </ul>

    </main>
    <x-footer />
</x-layouts.app>
