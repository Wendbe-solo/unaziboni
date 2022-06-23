@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
<div class="my-3 p-3 bg-body rounded shadow-sm">
 <h3 class="centretout">Fiche d'abonnement</h3>

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
        <center>
        <div class="container">
        <form method="POST" action="{{route('etudiant.ajouter')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Matricule</label>
                <input type="text" name="matricule" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Cycle</label>
                <input type="text" name="cycle" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Date de naissance</label>
                <input type="date" name="age" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control formulaire" id="">

            </div>

            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Numero</label>
                <input type="text" name="numero"  class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control formulaire" id="">

            </div>
            <button type="submit" class="btn btn-primary formula">Enregistre</button>
            <a href="{{route('etudiant')}}"  class="btn btn-danger">Retour</a>
        </form>
        </center>

    </div>

</div>
@endsection
