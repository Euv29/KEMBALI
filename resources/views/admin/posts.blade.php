@extends('layouts.adminDashboard')

@section('title', 'Publicações')

@section('content')
<section class="analitics grafics flex  space-evenly">
     <table class="table">
          <thead>
               <tr>
                    <th>ID do Usuário</th>
                    <th>Descrição</th>
                    <th>Data de Criação</th>
                    <th>Ações</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($posts as $post)
               <tr>
                    <td>{{ $post->user_id}}</td>
                    <td>{{ $post->pergunta }}</td>
                    <td>{{ $post->created_at->diffForHumans()  }}</td>
                    <td class="action">
                         <form class="action" action="">
                              <button class="action-btn">Deletar</button>
                         </form>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
</section>
@endsection