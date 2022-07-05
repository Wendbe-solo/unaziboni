@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button>
<a href="{{route('etudiant')}}" class="btn btn-primary"><h3>liste etudiant</h3></a> 
</button>
<button><a href="{{route('etudiant.ajouter')}}" class="btn btn-primary"><h3>Ajouter etudiant</h3></a></button>
<button><a href="etudiant.edit" class="btn btn-primary"><h3>Ajouter etudiant</h3></a></button>
<button><a href="etudiant.supprimer" class="btn btn-primary"><h3>Ajouter etudiant</h3></a></button>
<button><a href="etudiant.update" class="btn btn-primary"><h3>Ajouter etudiant</h3></a></button>
   

</body>
</html>




@endsection