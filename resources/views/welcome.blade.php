@extends('layouts.master')


@section("contenu")
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   

  

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 0;
            }
        </style>
    </head>
    <body class="antialiased">

    <div class="ratio ratio-4x3">
      <h2>Gestion des abonnés</h2>
    </div>

    <div class="row g-0 bg-light position-relative">
      <div class="col-md-6 mb-md-0 p-md-4">
       
        <br><br>
        <form action="" method="post">
          
            <div class="d-grid gap-2 d-md-block">
              <a href="{{route('etudiant.create')}}">
              <button class="btn btn-primary" type="button">Ajouter un abonné</button></a>
              
              <a href="{{ route('etudiant')}}">
              <button class="btn btn-primary butv" type="button">liste des abonnées</button></a>
            </div>
      </form>
        
      </div>

        <div class="">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Se connecter</a> <div></div>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'enregistrer</a>
                        @endif
                    @endauth
                </div>
            @endif

                </div>
            </div>
        </div>
    </body>
</html>

@endsection