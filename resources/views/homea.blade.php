@extends("layouts.app")

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">

<section class="">
<div id="app ">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm topo">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('UMIVERSITE NAZI BONI') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   </div>
</section>

<style>
  .topo{
    margin-top: -22px;
    background-color: rgba(153, 205, 50, 0.594) !important;

  }
#mySidenav a {
  position: absolute;
  left: -130px;
  transition: 0.3s;
  padding: 20px;
  width: auto;
  text-decoration: none;
  font-size: 25px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 290px;
  background-color: #04AA6D;
}

#blog {
  top: 370px;
  background-color: #04AA6D;
}

#projects {
  top: 450px;
  background-color: #2196F3;
}

#contact {
  top: 530px;
  background-color: #2196F3;
}
#dct {
  top: 610px;
  background-color: rgb(247, 4, 4)
}
body{
    
    background-image: url({{asset('./nav/image/c2.jpg')}});
    background-repeat: no-repeat;
    background-size: cover;
}
.rr{
 width: 30%;
 height: 350px;
 background-color: rgba(0, 0, 0, 0.566);

}
.rrr{
    color: black;
    font-family: cooper;
    font-size: 30px;
}
form{
    background-image: url({{asset('./nav/image/univbobo.png')}});
    opacity: 0.6;
    background-repeat: no-repeat;
    background-size: cover;
}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav ff">
  <a href="#" id="about">Ajouter Sécrétaire</a>
  <a href="{{route('secretaire')}}" id="blog">Liste des Sécretaires</a>
  <a href="{{route('etudiant.create')}}" id="projects">Ajouter Etudiant</a>
  <a href="{{route('etudiant')}}" id="contact">Liste des Etudiant</a>
  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" id="dct">
                                        {{ __('Se deconnecter') }}
                                    </a>

</div>

<div style="margin-left:80px;">
    <center>
  <h1>BIENVENU SUR L'ESPACE ADMINISTRATEUR QUE VOULEZ VOUS FAIRE</h1>
</center>
</div>
<center>
<form action=""class="rr"></form>
<p class="rrr">Université Nazi Boni</p>
</center>
   
</body>
</html> 
@endsection
