@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
<body class="body">
 <div class="bod">
 <h3 class="centretout">Formulaire d incription d'un(e) Secretaire</h3>
 <style>
    .card{
        border: solid 1px black;
        padding: 15px;
        background-color: rgba(255, 255, 255, 0.564);
    
    }
    .body{
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url({{asset('bac/am.jpg')}});
  
  }
    .cv{
        width: 80%;
        margin-left: 10%;
    }
 </style>

    


    <div class="mt-4">

        @if(session()->has("success"))
        <div class="alert alert-sucess">
            {{session()->get('success')}}
            </div>
        @endif

        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        
        <div class="container card">
        <form method="POST" action="{{route('etudiant.ajouter')}}" class="cv">
            @csrf
            <div class="mb-3">
                <label for="exampleinputEmail" class="">Nom</label>
                <input type="text" name="nom" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control formulaire" id="">


            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control formulaire" id="">

            </div>

            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Mot de passe</label>
                <input type="text" name="numero"  class="form-control formulaire" id="">

            </div>
           
            <button type="submit" class="btn btn-primary formula">Enregistre</button>
            <a href="{{route('etudiant')}}"  class="btn btn-danger">Retour</a>
        </form>
       

    </div>
   

 </div>
</body>
@endsection
