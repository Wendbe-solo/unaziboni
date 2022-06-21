<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des abonnés</h3>

    <div class="mt-4">
        <div class="d-flex justify-content-between mb-4">
        <a href="{{route('etudiant.create')}}" class="btn btn-primary">Ajouter un nouvel abonnée</a>
        </div>
        @if(session()->has("successDelete"))
        <div class="alert alert-sucess">
            {{session()->get('successDelete')}}
            </div>
        @endif
        <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date_naissance</th>
            <th scope="col">Email</th>
            <th scope="col">Numero</th>
            <th scope="col">Date d'abonnement</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->age}}</td>
            <td>{{$etudiant->email}}</td>
            <td>{{$etudiant->numero}}</td>
            <td>{{$etudiant->created_at}}</td>
            <td>
                <a href="{{route('etudiant.edit',['etudiant'=>$etudiant->id])}}" class="btn btn-info">Editer</a>
                <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet étudiant?')){document.getElementById('form-{{$etudiant->id}}').submit()}">Suprimer</a>

                <form id="form-{{$etudiant->id}}" action="{{route('etudiant.supprimer',['etudiant'=>$etudiant->id])}}" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>
    </div>

</div>