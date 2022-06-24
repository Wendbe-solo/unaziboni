@extends("layouts.app")

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
 height: 330px;
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
  <a href="#" id="blog">Liste des Sécretaires</a>
  <a href="#" id="projects">Ajouter Etudiant</a>
  <a href="#" id="contact">Liste des Etudiant</a>
  <a href="#" id="dct">Deconnextion</a>
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
