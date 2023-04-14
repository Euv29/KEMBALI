@extends('layouts.adminDashboard')

@section('title', 'Usuários')

@section('content')
<section class="analitics grafics flex  space-evenly">
     <table class="table">
          <thead>
               <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data de Criação</th>
                    <th>Ações</th>
               </tr>
          </thead>
          <tbody>
               @foreach ($usuarios as $usuario)
               <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->created_at->diffForHumans()  }}</td>
                    <td class="action">
                         <form class="action" action="">
                              <button class="action-btn delete">Deletar</button>
                         </form>
                    </td>
               </tr>
               @endforeach
          </tbody>
     </table>
</section>
@endsection