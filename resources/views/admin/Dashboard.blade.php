@extends('layouts.adminDashboard')

@section('title', 'Dados Gerais')

@section('content')
<section class="analitics general flex  space-evenly">
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">USUÁRIOS</h1>
               <h2 class="data-analitec">{{ $numUsuarios }}</h2>
          </section>
     </a>
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">PUBLICAÇÕES</h1>
               <h2 class="data-analitec">{{ $numPosts }}</h2>
          </section>
     </a>
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">COMENTÁRIOS</h1>
               <h2 class="data-analitec">{{ $numComments }}</h2>
          </section>
     </a>
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">FALHAS</h1>
               <h2 class="data-analitec">{{ $numFalhas }}</h2>
          </section>
     </a>
</section>
<section class="analitics grafics flex  space-evenly">
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">NOVOS USUÁRIOS</h1>
          </section>
     </a>
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">ACESSOS / DIA</h1>
          </section>
     </a>
</section>
<section class="analitics new-users flex  space-evenly">
     <a class="box-conteiner" href="">
          <section>
               <h1 class="analitic-title">NOVAS PUBLICAÇÕES</h1>
          </section>
     </a>
</section>
@endsection
