@extends('layouts.master')

@section('content')



<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SAWADOGO W Norbert</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> -->

  <!-- Favicons -->
  <!-- <link href="assets/img/profil.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profil.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Directeur</a></h1>
        <div class="social-links mt-3 text-center">

          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Ajout sécrétaire</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Ajout etudiant</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Lister Sécretaire</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Lister Etudiant</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Se deconnecter</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h2 class="nom">SAWADOGO Wendbe Norbert</h2>
      <p>Je suis <span class="typed" data-typed-items="université Nazi Boni"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Ajout de Sécrétaire</h2>



          <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <p for="role-select" class="font-semibold text-gray-700">Je suis:</p>
                            <div class="flex justify-between items-center">
                                <label for="freelance">Directeur
                                    <input type="radio" value="1" id="Directeur" name="role_id">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="client">Sécrétaire
                                    <input type="radio" value="2" id="Sécrétaire" name="role_id">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
          <!-- <p>Bienvenue sur mon site. Je croit qu'il vous sera utile après votre parcour 
          </p>
          <h2>SAWADOGO Wendbe Norbert</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profil.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Je suis un très heureuxx de votre visite</h3>
            <p class="fst-italic">
              mon Etat civil
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Date de naissance:</strong> <span>6 Juin 1998</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>https://wendbe-solo.github.io/norbertwendbe/</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+226 70806891</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Pays:</strong> <span>Burkina Faso</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>24</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Niveau:</strong> <span>BAC</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>wendbenorbert@gmail.com</span></li>
                </ul>
              </div>
            </div>
            <p>
              </p>
          </div>
        </div> -->

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->




    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Ajout Etudiant</h2>




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


          <!-- <p>AU cour de mes etudes et de mes formations j'ai eu a aprendre des outils, qui aujoud'hui me permet de 
            me developer et aider qui le besoin se présente
          </p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Musique <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Conduite vehicule <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Illustrator <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Maintenance information <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Microsof office <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div> -->

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Listes des Sécretaire</h2>



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
                                <th scope="col">Matricule</th>
                                <th scope="col">Cycle</th>
                                <th scope="col">Date_naissance</th>
                                <th scope="col">Email</th>
                                <th scope="col">Numero</th>
                                <th scope="col">photo</th>
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
                                <td>{{$etudiant->matricule}}</td>
                                <td>{{$etudiant->cycle}}</td>
                                <td>{{$etudiant->age}}</td>
                                <td>{{$etudiant->email}}</td>
                                <td>{{$etudiant->numero}}</td>
                                <td>{{$etudiant->photo}}</td>
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
            



          <!-- <p>Voici mes formations professionnelles et mes formaations éducatives </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Formations</h3>
            <div class="resume-item pb-0">
              <h4>SAWADOGO w Norbert</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Formation </li>
                <li></li>
                <li></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4></h4>
              <h5>2016 - 2017</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Resume Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Liste des Etudiants</h2>



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
                                <th scope="col">Matricule</th>
                                <th scope="col">Cycle</th>
                                <th scope="col">Date_naissance</th>
                                <th scope="col">Email</th>
                                <th scope="col">Numero</th>
                                <th scope="col">photo</th>
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
                                <td>{{$etudiant->matricule}}</td>
                                <td>{{$etudiant->cycle}}</td>
                                <td>{{$etudiant->age}}</td>
                                <td>{{$etudiant->email}}</td>
                                <td>{{$etudiant->numero}}</td>
                                <td>{{$etudiant->photo}}</td>
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



          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">


        <footer id="foot">
  <div class="fin">
    <ul>
    <h3> <li>CONTACT</li></h3>
         <li>Université NAZI BONI</li>
         <li>Tél. : (00226) 20 98 06 35</li>
         <li>email : info@u-naziboni.bf.</li>
         <li>Webmail : UNB Mail</li>
    </ul>
    <img src="{{ asset('img/slide/logoo.jpg') }}" class="pied" alt="">
  </div>
 <center><h5>Designer by @ Tidiane Epiphan Norbet</h5></center>
  
  
        </footer>
        </main>
    </div>

          <!-- <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Burkina Faso</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>wendbenorbertsawadogo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+226 70806891</p>
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section>
    
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>End  Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> -->




</body>

</html>