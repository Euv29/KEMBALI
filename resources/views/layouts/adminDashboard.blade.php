<!DOCTYPE html>
<html lang="pt-PT">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title')</title>

     <!-- STYLE LOCAL -->
     <link rel="stylesheet" href="/css/admin/globla.css">
     <link rel="stylesheet" href="/css/admin/style.css">

     

</head>

<body>
     <main class="container flex space-evenly">

          <!-- HOTBAR FOR NAVEGATION -->
          <section class="conteiner-element">
               <section class="hotbar">
                    <h1 class="logo">Kembai</h1>
                    <nav class="navbar">
                         <ul class="list-conteiner">
                              <li class="list-element"><a class="dashboard-btn" href="{{ route('admin.dashboard') }}"><ion-icon class="icon" name="podium-outline"></ion-icon>Dashboard</a></li>
                         </ul>

                         <h3 class="list-title">Painel de Análises</h3>
                         <ul class="list-conteiner">
                              <li class="list-element mt-1"><a href="{{ route('admin.userspage') }}"><ion-icon class="icon" name="person-circle-outline"></ion-icon>Usuários</a></li>
                              <li class="list-element mt-1"><a href="{{ route('admin.postspage') }}"><ion-icon class="icon" name="create-outline"></ion-icon>Publicações</a></li>
                              <li class="list-element mt-1"><a href=""><ion-icon class="icon" name="alert-circle-outline"></ion-icon>Denuncias</a></li>
                              <li class="list-element mt-1"><a href="{{ route('admin.falhaspage') }}"><ion-icon class="icon" name="archive-outline"></ion-icon>Falhas Reportadas</a></li>
                         </ul>

                         <hr>

                         <h3 class="list-title">Configuração</h3>
                         <ul class="list-conteiner">
                              <li class="list-element mt-1"><a href=""><ion-icon class="icon" name="search-outline"></ion-icon>Procurar</a></li>
                              <li class="list-element mt-1"><a href=""><ion-icon class="icon" name="settings-outline"></ion-icon>Editar Perfil</a></li>
                              <li class="list-element mt-1"><a href=""><ion-icon class="icon" name="exit-outline"></ion-icon>Terminar Sessão</a></li>
                         </ul>
                    </nav>
               </section>
          </section>

          <section class="conteiner-element">
               <section class="conteiner header-conteiner space-evenly flex">
                    <section class="title-page flex">
                         <h1 class="title">@yield('title')</h1>
                    </section>
                    <section>
                         <nav class="navbar">
                              <ul class="list-conteiner flex">
                                   <li class="notifi-icon list-element"><a href=""><ion-icon class="icon-na" name="notifications-outline"></ion-icon></a></li>
                                   <li class="username list-element">
                                        <a class=" flex row user-information" href="/">
                                             <img class="profile-img" src="/img/perfil/{{ auth()->user()->imagem }}" alt="">
                                             <p class="username">{{$user->name}}</p>
                                        </a>
                                   </li>
                              </ul>
                         </nav>
                    </section>
               </section>
               <section class="conteiner-element body-conteiner">
                    @yield('content')
               </section>
          </section>
     </main>

</body>
<script src="assets/js/index.js"></script>

<!-- IONICONS -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</html>