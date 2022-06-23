<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autentif adm</title>
    <link rel="stylesheet" href="{{asset('./ass/css/style.css')}}">
</head>
<body>
    <section class="big-bg dd">
        <style>
            .dd{
                background-image: url({{asset('ass/img/slide/images.jpeg')}});
            }
        </style>

    <nav>
        <div class="logo" >
            <img src="{{asset('./ass/img/slide/logo.png')}}" alt="">
            <img src="{{asset('./ass/img/slide/images3.jpg')}}" alt="" id="logo1" />
        </div>

       
    </nav><br><br><br>
    <div>
        <div class= "container" id="nous3">
            <div class="header">
            <h3 id="epihan" >ADMINISTRATEUR</h3>
            </div>
            <div class="main">
           <form>
           
            <span>
            <i class="fa fa_loc"> </i>
            <input type="email" placeholder="email" name="">
            </span>
            <span>
            <i class="fa fa_loc"></i>
            <input type="password" placeholder="password" name="">
            </span>
            
            <button> Envoyer </button>
            </form>
           </div>
          </div>
    </div>

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
       <center><h5>Designer by @ Tidiane Epiphan Norbet</h5></center>
        
        
              </footer>
            </section>
    
</body>
<script src="assets/js/main.js"></script>
</html>