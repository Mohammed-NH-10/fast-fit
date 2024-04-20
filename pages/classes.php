<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/bootstrap.css">
    <link rel="stylesheet" href="../assets/JS/bootstrap.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>Classes page</title>
</head>
    
<body class="vh-10000">
<style>
        *{
                padding: 0 ;
                margin: 0;
                box-sizing: border-box;
            }
        body{
            
            background: linear-gradient(145deg,black,black,black,#786c01, #d1bc00);
            background-repeat: no-repeat;
           
        }
           
    
       @font-face {
            font-family: "Sedan";
            src: url(../assets/fonts/Sedan/Sedan-Regular.ttf);
            font-family: 'Montserrat';
            src: url(../assets/fonts/Montserrat/static/Montserrat-Regular.ttf);
            font-family: "play";
            src: url(../assets/fonts/static/Platypi-SemiBold.ttf);
        }
        @font-face {
           
            font-family: "dancing2";
            src: url(../assets/fonts/Dancing_Script/static/DancingScript-Regular.ttf);
        }
        @font-face {
            font-family: "dancing";
            src: url(../assets/fonts/Dancing_Script/static/DancingScript-Bold.ttf);
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
            color: #000;
        }
        a:hover{
            
            
            background-color: rgba(255, 255, 255, 0.30);
            backdrop-filter: blur(10px) ;
            
        }
        a:hover,.a:focus-visible{
            transform: translateY(-0.50rem);
            transform: transform 200ms ;
        }
        
       
            @media (max-width:991px) {
                .sidebar{ 
                    background-color: rgba(255, 255, 255, 0.15);
                    backdrop-filter: blur(10px) ;
            }
        }
       
        
    </style>
<div class="scroll-w"></div>
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-transparent w-60  ">

            <div class="container overflow-hidden w-100 ">
                                    <!-- LOGO -->
                    <div class="navbar-brand flex-grow-1 w-100 m-1 p-6 h-100" href="#">
                    <img class="me-auto" src="../assets/IMAGES/fast-fit.png">
                    </div>
                <button class="navbar-toggler border-light shadow-none" style="position: fixed; right:8px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="fa-solid fa-list" style="color:#fff"></span>
                </button>
                    <!-- Sidebar -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <!-- Sidebar header -->
                    <div class="offcanvas-header text-white border-bottom">
                        <img src="../assets/IMAGES/fast-fit.png">
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                            <!-- Sidebar body -->
                    <div class="offcanvas-body fw-medium text-capitalize / d-flex flex-column p-4 /" >
                    
                        <ul class="navbar-nav  justify-content-center align-items-center fs-6 flex-grow-1 pe-3   p-1 mb-3 border-opacity-25 rounded-pill ">
                        
                                <li class="nav-item mx-2">
                                    <a href="#" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" style="color: white;" >Home</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a href="pages/classes.php" aria-current="page" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" style="color: white;">Classes</a></li>
                                <li class="nav-item mx-2">
                                    <a href="#" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" aria-current="page" style="color: white;">Schedule</a></li>
                                <li class="nav-item mx-2">
                                    <a href="pages/memberships.php" aria-current="page" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" style="color: white;">Memberships</a></li>
                                <li class="nav-item mx-2">
                                    <a href="pages/pricing.php" class="nav-link mx-2 mb-2 px-3 py-1 rounded-4" aria-current="page" style="color: white; ">Pricing</a></li>
                                <!-- dropdown -->
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle mx-2 mb-2 px-3 py-1 rounded-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
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
</div>
</body>
</html>