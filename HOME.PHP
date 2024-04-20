<?php include("assets/INCLUDE/config.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="assets/CSS/bootstrap.css">
    <link  rel="stylesheet" href="assets/JS/bootstrap.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Home page</title>

    
</head>
<body class="vh-10000 ">
    <style>
        *{
                padding: 0 ;
                margin: 0;
                box-sizing: border-box;
            }
        html{
            scroll-behavior: smooth;
        }
       @font-face {
            font-family: "Sedan";
            src: url(assets/fonts/Sedan/Sedan-Regular.ttf);
            font-family: 'Montserrat';
            src: url(assets/fonts/Montserrat/static/Montserrat-Regular.ttf);
            font-family: "play";
            src: url(assets/fonts/static/Platypi-SemiBold.ttf);
        }
        @font-face {
           
            font-family: "dancing2";
            src: url(assets/fonts/Dancing_Script/static/DancingScript-Regular.ttf);
        }
        @font-face {
            font-family: "dancing";
            src: url(assets/fonts/Dancing_Script/static/DancingScript-Bold.ttf);
        }
        .scroll-w{
        height: 4px;
        position: fixed;
        top: 0;
        z-index: 1000;
        background-color: yellow;
        width: 100%;
        scale: 0 1;
        animation: scroll-w linear;
        animation-timeline: scroll();
        }
        @keyframes scroll-w {
        to{ scale: 1 1;}
        }
        h1{
            font-family: "dancing";
            letter-spacing: 5px;
           
        }
        
        p{
            font-family: "play" ,sans-serif;
            font-size: xx-large;
        }
        img{
            width:160px;
           
        }
        nav  {
            position: relative;
            font-family: 'Montserrat' ,sans-serif;
            font-size: medium;
            
            max-width: 80%;
            
        }
        a{
            transition: transform 1000ms;
        }
        a:hover{
            
            
            background-color: rgba(255, 255, 255, 0.30);
            backdrop-filter: blur(10px) ;
            
        }
        a:hover,.a:focus-visible{
            transform: translateY(-0.50rem);
            transform: transform 200ms ;
        }
        body{
            background: linear-gradient(145deg,#36331b,black,#786c01, #d1bc00);
           
        }
       
        
       
       
        #myVideo {
        position: absolute;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        height: 100vh;
        min-width: 100%;
        min-height: 100%;
        object-fit: cover;
        z-index: -1; /* Make sure the video is behind other content */
        
        }
        
            @media (max-width:991px) {
                .sidebar{ 
                    background-color: rgba(255, 255, 255, 0.15);
                    backdrop-filter: blur(10px) ;
            }
        }
        
        
    </style>
    <div class="scroll-w"></div>
<div class="containe"> 
                <!----------- Start  of Hero section ------------------->
    <div class="hero-section vh-100  ">
                <video id="myVideo" class="" autoplay loop muted>
                    <source src="assets/IMAGES/bg-video2.mp4" type="video/mp4">
                </video>

                        <!------------- nav code -------------->
            <nav class="navbar navbar-expand-lg navbar-transparent w-60 fixed-top ">
            <div class="container overflow-hidden w-100 ">
                                    <!-- LOGO -->
                    <div class="navbar-brand flex-grow-1 w-100 m-1 p-6 h-100" href="#">
                    <img class="me-auto" src="assets/IMAGES/fast-fit.png">
                    </div>
                <button class="navbar-toggler border-light shadow-none" style="position: fixed; right:8px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="fa-solid fa-list" style="color:#fff"></span>
                </button>
                    <!-- Sidebar -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <!-- Sidebar header -->
                    <div class="offcanvas-header text-white border-bottom">
                        <img src="assets/IMAGES/fast-fit.png">
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                            <!-- Sidebar body -->
                    <div class="offcanvas-body fw-medium text-capitalize / d-flex flex-column p-4 /" >
                    
                        <ul class="navbar-nav  justify-content-center align-items-center fs-6 flex-grow-1 pe-3   p-1 mb-3 border-opacity-25 rounded-pill ">
                        
                                <li class="nav-item mx-2">
                                    <a href="#" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" style="color: #fff;" >Home</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a href="pages/classes.php" aria-current="page" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" style="color: #fff;">Classes</a></li>
                                <li class="nav-item mx-2">
                                    <a href="#" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" aria-current="page" style="color: #fff;">Schedule</a></li>
                                <li class="nav-item mx-2">
                                    <a href="pages/memberships.php" aria-current="page" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" style="color: #fff;">Memberships</a></li>
                                <li class="nav-item mx-2">
                                    <a href="pages/pricing.php" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" aria-current="page" style="color: #fff; ">Pricing</a></li>
                                <!-- dropdown -->
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle mx-2 mb-2 px-3 py-1 rounded-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;">
                                        Others
                                    </a>
                                    <ul class="dropdown-menu bg-transparent border-none">
                                        <li><a class="dropdown-item mx-2 mb-2 px-3 py-1 rounded-4"  href="#"style="color: #7e8a9c;">About us</a></li>
                                        <li><a class="dropdown-item mx-2 mb-2 px-3 py-1 rounded-4" href="#"style="color: #7e8a9c;">Contact us</a></li>
                                    
                                    </ul>
                                </li>
            
                                 
                            
                        </ul>
                        

                    </div>
                    
                </div>
            </div>
            </nav>
           
                            <!------------- End nav -------------->
                            <!------------- card glass -------------->
            
            
                 
                <div class="glass text-center  w-auto h-50  position-absolute top-50 start-50 translate-middle ">
                <marquee class=" text-light " style=" top:30%; left:0%;" scrollamount=10 behavior=scroll width=100%
                                    loop=-1 height=84% dir=rtl direction=left><h1 ><span class=" text-warning ">Bring out</span> the athlete in you</h1>
                                </marquee>
            
                <div class="card position-absolute bottom-0 start-50  translate-middle-x h-100 ">
                    <div class="card-info">
                            <div class="mb-2 w-100 position-absolute bottom-0">
                                <h2 class="title1" style="font-family: 'dancing2';   ">Start Your Fitness Journey Today</h2>
                                <a href="#" class="btn btn-outline-warning flex-column mt-3 pb-2 " >Explore Our Classes</a>
                                <a  class="btn btn-outline-primary   mt-3 pb-2   " style="font-family: 'dancing';   ">Join with Us
                                    </a> 
                            </div>
                    </div>
                </div>
                </div>
            
    </div>   

                    <!----------- End of card glass --------->

    
             <!-- /* style_of this hero card */ -->
    <style>
            .glass{
            position: relative;
            top: 140px;
            align-items: center;
            background: linear-gradient(135deg,rgba(255,255,255,0.1), rgba(255,255,255,0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.18) ;
            box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37) ;
            max-width: 700px;
            }
            .card {
            
            --background:transparent;
            width: 200px;
            height: 145px;
            padding: 5px;
            background: var(--background);
            
            }

            
            .card-info {
            --color: transparent;
            background: var(--color);
            color: var(--color);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            
            
            }

            .card .title1 {
            
            letter-spacing: .1em;
            }

            /*Hover*/
            .card:hover::after {
            opacity: 0;
            }

            .card:hover .card-info {
            color: #f2c705;
            text-shadow: 0 2px 1px #747474;
            transition: color 2s;
            }
            

    </style>
        
           <!----------- End of Hero section ------------------->
</div>
    
        <!------------ FEATURE SECTION ------------>
    <div class="feature-section  vh-100 mt-3 mb-3 d-flex justify-content-center align-items-center ">
        <div class="card-features animation_f mt-6 ">
            <h2 class="text opacity-50 text-capitalize w-100" ><i class="fa-regular fa-circle-check"></i> Why us! <span class="w-100 ">Click to me</span></h2>
            <img class="all-about w-100 h-100" src="assets/IMAGES/feature-img.jpg" ></img>
            <div class="card__content bg-light ">
                <h3 class="card__title text-center mb-4">Features All About Fitness</h3>
                <p class="card__description ">
                    <li class=" mb-2">Expert trainers, personalized programs. Reach your fitness goals.</li>
                   <li class="mb-2"> Get custom workout plans tailored to your fitness goals and preferences.</li>
                   <li class="mb-2"> Monitor your progress with detailed workout tracking and insightful reports.</li>
                   <li class="mb-2">Develop strength, improve flexibility, and achieve your fitness goals through a variety of exercises.
                    </li>
                    <li class="mb-2">Connect with other fitness enthusiasts, share your journey, and stay motivated.</li></p>
            </div>
        </div>

    </div>
            
        <style>
            
            .feature-section{
                
                width: 100%;
                box-sizing: border-box;
            }
            
            
                .card-features {
            width: 450px;
            height: 500px;
            background-color: #f2f2f2;
            border-radius: 10px;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            perspective: 1000px;
            box-shadow: 0 0 0 5px #ffffff80;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }

            .card-features .all-about {
           
            fill: #333;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }

            .card-features:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.2);
            }
            .card-features h2 {
            position: absolute;
            top: 5%;
            left: 60%;
            justify-content: center;
            letter-spacing: 4px;
            transform: translate(-50%, -50%); /* Center the text horizontally and vertically */
            z-index: 1; /* Set z-index to a higher value to bring it in front of the image */
            color: #f2f2ed;
            }

            .card__content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 20px;
            font-size: 18px;
            font-family: 'Sedan';
            font-weight: 500;
            box-sizing: border-box;
            background-color: #f2f2f2;
            transform: rotateX(-90deg);
            transform-origin: bottom;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }

            .card-features:hover .card__content {
            transform: rotateX(0deg);
            }

            .card__title {
            margin: 0;
            font-size: 24px;
            font-family: 'play';
            color: yellow;
            text-shadow: 0 0px 10px gray;
            font-weight: 900;
            }

            .card-features:hover.all-about {
            scale: 0;
            }

            .card__description {
            margin: 10px 0 0;
            font-size: 14px;
            color: #777;
            line-height: 1.4;
            }
            .animation_f{
                
            view-timeline-name: --subjectReveal;
            animation-timeline: --subjectReveal;
            
            animation-name: appear;
            animation-fill-mode: both;
            animation-duration: 1ms; /* Firefox requires this to apply the animation */
            }
            
            @keyframes appear {
            from {
                opacity: 0;
                transform: scaleX(0);
            }
            
            to {
                opacity: 1;
                transform: scaleX(1);
            }
            }
            /*           about message part      */
            .message{
                
                animation-timeline: view();
                color: #fff;
                animation-name: appear;
                animation-duration: 1ms;
            }
            @keyframes appear{
                from {
                opacity: 1;
                transform: scaleX(0);
            }
            
            to {
                opacity: 2;
                transform: scaleX(1);
            }
            }
                /*   End of message part     */
         
            </style>
    
    <!-- End of code feature section  -->

    <div class="message vh-60 mt-4 mb-3 text-center d-grid justify-content-center align-items-center place-items-center  ">
        <h1 class="title fs-1 fw-3 text " style="font-family: 'play'; color:white; text-shadow:0px 3px 5px cyan;">Reach Your Fitness Goals: We'll Be Your Partner!</h1>
        <h2 class=" fs-2 " style="font-family:'Sedan';">We know starting a fitness routine can be tough, and sometimes people give up.
             But we want to help you see fitness in a new way,
              something you can easily fit into your everyday life. 
              We believe healthy habits lead to a healthy lifestyle, 
              and we're here to support you on that journey!

        </h2>
    </div>
                        <!------------ the part of Services of classes ----------->
    <div class="services">
        <div class="title big-title"><h1 >-Our Classes <span> <a href="pages/classes.php" class="btn btn-outline-warning flex-column position-absolute   end-0 m-6 " 
        style="font-size:large; right: 20px !important;">check</a>
</span> </h1>
           
            <div class="cards">
                    <div class="card-s ">
                        
                        <img src="assets/IMAGES/crossfit-training.jpg" alt="" style="min-width: 300px;">
                        <div class="intro">
                        <h3 class="title-s">Crossfit Training</h3>
                        <p class="text-s">Description of Crossfit Training class...</p>
                        </div>
                    </div>

                    <div class="card-s">
                        
                        <img src="assets/IMAGES/fit-training.jpg" alt="">
                        <div class="intro">
                        <h3 class="title-s">Fitness Training</h3>
                        <p class="text-s">Description of  Training class...</p>
                        </div>
                    </div>

                    <div class="card-s">
                        
                        <img src="assets/IMAGES/weight-training.jpg" alt="">
                        <div class="intro">
                        <h3 class="title-s">Weight Lifting</h3>
                        <p class="text-s">Description of  Training class...</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
 <style>
    .cards{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;

    }
    .container {
        display: flex;
     
    }
    
    .big-title span{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        letter-spacing: none;
    }
    
    .title{
      color: orange;
      justify-content: start;
    }
    .card-s{
      height: 500px;
      width: 400px;
      margin: 30px;
      border-radius: 8px;
      box-shadow: 5px 5px 20px black ;
      overflow: hidden;
    }
    .card-s img{
      height: 100%;
      width: 100%;
      min-width: 200px;
      border-radius: 8px;
    }
    .title-s{
      margin: 10px;
      font-size: 40px;
      color: orange;
    }
    .text-s{
      font-size: 20px;
      margin: 20px;
      visibility: hidden;
      opacity: 0;
    }
    
    .intro{
      height: 70px;
      width: 350px;
      padding: 6px;
      box-sizing: border-box;
      position: relative;
      bottom: 100px;
      color: whitesmoke;
      transition: .5s;
    }
    .card-s:hover{
      cursor: pointer;
    }
    .card-s:hover .intro{
      height: 220px;
      bottom: 240px;
      
    }

    .card-s:hover p{
      opacity: 1;
      visibility: visible;
    }
    .card-s:hover img{
      transform: scale(1.1) rotate(-3deg);
    }
    </style>
                    <!-- End  the code  of Services -->
</div>

</body>
</html>