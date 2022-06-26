<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./m/m.css')}}">
</head>
<body>
    <section>
    <section class="big-bg dd">
        <style>
            .dd{
                background-image: url({{asset('ass/img/slide/images.jpeg')}});
            }
            .logo{
                background-color: indigo;
            }
            .fin ul li{
                list-style: none;
                text-decoration: none;
            }
         
        </style>

        <div class="logo" >
            <img src="{{asset('./ass/img/slide/logo.png')}}" alt="">
            <img src="{{asset('./ass/img/slide/images3.jpg')}}" alt="" id="logo1" >
        </div>
    </section>
    


        <main class="py-4">
            @yield('content')
        </main>
 
    
<section>
<footer id="foot">
        <div class="fin">
          <ul>
          <h3> <li>CONTACT</li></h3>
               <li>Université NAZI BONI</li>
               <li>Tél. : (00226) 20 98 06 35</li>
               <li>email : info@u-naziboni.bf.</li>
               <li>Webmail : UNB Mail</li>
          </ul>
          <img src="{{asset('./ass/img/slide/logoo.jpg')}}" class="pied" alt="">
        </div>
       <center><h5>Designer by @ Tidiane Epiphane Norbet</h5></center>   
    </footer>
</section>
<script src="assets/js/main.js"></script>
</body>
</html>
