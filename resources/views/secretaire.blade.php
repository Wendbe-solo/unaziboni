@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des Secretaires</h3>

    <div class="mt-4">
        <div class="d-flex justify-content-between mb-4">
        <a href="{{route('etudiant.create')}}" class="btn btn-primary">Ajouter un nouvel abonnée</a>
        </div>
       
        <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$user->nom}}</td>
            <td>{{$user->prenom}}</td>
            <td>{{$user->email}}</td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>
    </div>

</div>
@endsection