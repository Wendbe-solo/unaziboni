@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
 <style>
    .card{
        border: solid 1px black;
        padding: 15px;
        background-color: rgba(255, 255, 255, 0.564);
       
    
    }
    .s th,tr{
        border: solid 1px black;
    }
    .body{
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url({{asset('bac/am.jpg')}});
  
  }
  .tou{
    background-color: rgba(255, 255, 255, 0.564);
  }
 </style>
<div class="body">
    <h3 class="border-bottom pb-2 mb-4">Liste des Secretaires</h3>

    <div class="mt-4">
        <div class="d-flex justify-content-between mb-4">
        <a href="{{route('etudiant.create')}}" class="btn btn-primary">Ajouter une Secretaire</a>
        </div class="tou">
       
            <div class="center card tou">
                <table class="table table-bordered table-hover ">
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