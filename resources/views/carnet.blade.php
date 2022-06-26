@extends("layouts.app")
@section("content")
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
<style>
    .for label{
        margin-top: 0% !important; 
        font-weight: bold;
    }
    .ctr1{
        width: 70% !important;
        height: 600px !important;
    }
    .do{
        font-family: cooper;
        font-style: oblique;
        font-size: 30px;
    }
    .dodo{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<body>
<link rel="stylesheet" href="{{asset('./ctr/style.css')}}">
    <head>
     
     <section class="crt1">
      
        <dir>
            <div class="nomc">
                <center>
                <p class="do">Carte d'etudiant</p>
                <p class="dodo">NAZI BONI</p>
            </center>
            </div>
            <div class="bid">
                <div class="for">
                    <label for="">Nom</label>
                    <input type="text" placeholder="Nom" >
                    <label for="">Prénom</label>
                    <input type="text" placeholder="Prenom" >
                    <label for="">Matricule</label>
                    <input type="text" placeholder="Matricule" >
                    <label for="">Cycle</label>
                    <input type="text" placeholder="Cycle" >
                    <label for="">Date de Naissance</label>
                    <input type="text" placeholder="Date de naissance" >
                    <label for="">Anne Academique</label>
                    <input type="text" placeholder="Annee Academique" >
                    
                </div>
              
                <div  class="for2">
                    <img src="{{asset('ctr/image/logo.png')}}" alt="" class="im1">
                    <img src="{{asset('ctr/image/burkina drapeau.png')}}" alt="" class="im2">
                </div>

            </div>
          
        </dir>
        <dir>
            <div></div>
        </dir>
        <div class="foo"><center><p class="ttt">cette carte est stricictement personnel</p></div>
     </section>
     <section class="crt2">
        <center><p >Cette carte est strictement personnel en cas de perte veuillez informer le secretair de l’université NASI BONI</p></center>

        <center>
        <ul>
    <li>Université NAZI BONI</li>
    <li>Tél. : (00226) 20 98 06 35</li>
    <li>email : info@u-naziboni.bf.</li>
    <li>Webmail : UNB Mail</li>
</ul>
</center>
@endsection