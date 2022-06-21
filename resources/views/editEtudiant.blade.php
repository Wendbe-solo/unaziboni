<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">editer d'un etudiant</h3>

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
        <div class="container centre">

        
        <form method="POST" action="{{route('etudiant.update',['etudiant'=>$etudiant->id])}}">
            @csrf
            <input type="hidden" name="_method" value="put">
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Nom</label>
                <input type="text" name="nom" value="{{$etudiant->nom}}" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Prenom</label>
                <input type="text" name="prenom" value="{{$etudiant->prenom}}" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Date de naissance</label>
                <input type="date" name="age" value="{{$etudiant->age}}" class="form-control formulaire" id="">

            </div>
            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Email</label>
                <input type="email" name="email" value="{{$etudiant->email}}" class="form-control formulaire" id="">

            </div>

            <div class="mb-3">
                <label for="exampleinputEmail" class="form-label">Numero</label>
                <input type="text" name="numero" value="{{$etudiant->numero}}" class="form-control formulaire" id="">

            </div>
            <button type="submit" class="btn btn-primary formula">Enregistre</button>
            <a href="{{route('etudiant')}}"  class="btn btn-danger">Retour</a>
        </form>
        </div>

    </div>

</div>