<!-- include_code -->
<?php include('assets/INCLUDE/config.php'); ?>
<!-- end_include -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/bootstrap.css">
    <title>Login Page</title>
</head>
<body>
    <style>
        body, html {
        margin:0;
        padding:0;
        }

        .wrapper {
        background:teal;
        height:100vh;
        }

        .frame img {
        max-width:100%;
        height:100vh;
        }

        .container{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
            <div class="wrapper">
        <div class="frame">
            <img src="assets/images/bg-index.jpg">
        </div>
        </div>

                
                                                            <!-- Login form -->
                <div class="login-box border border-outline-warning">
                <img src="assets/IMAGES/fast-fit.png" class="  w-100">
                <div class="shine mb-3"> <center>LOGIN</center></div>
                

  <form method="post" >
    <!-- php code -->
    <?php
      if (isset($_POST["btn_login"])) {
        $loginname = $_POST["login_name"];
        $pwd = $_POST["pwd_login"];

       

        $req = $cnx->query(" SELECT * FROM users WHERE login = '$loginname' AND pwd = '$pwd'; ");

        if ($req->rowCount() > 0) {
          header("location:Home.php");
        } else {
          echo '<div class="alert alert-danger text-center">Something wrong</div>';
        }
      }
    ?>
    <!-- End php code -->
    <div class="user-box">
      <input type="text" name="login_name" required="Enter your username">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="pwd_login" required="Enter your password">
      <label>Password</label>
    </div>
    <center>
      <button type="submit" name="btn_login">
       Enter
        <span></span>
      </button>
    </center>
  </form>
</div>

              
<style>
    img{
        width: 100%;
    }
    
    /* text login */
        .shine {
    font-size: 2em;
    font-weight: 900;
    color: rgba(255, 255, 255, 0.3);
    background: #222 -webkit-gradient(
        linear,
        left top,
        right top,
        from(#222),
        to(#222),
        color-stop(0.5, #fff)
        ) 0 0 no-repeat;
    background-image: -webkit-linear-gradient(
        -40deg,
        transparent 0%,
        transparent 40%,
        #fff 50%,
        transparent 60%,
        transparent 100%
    );
        background-clip: text;
        background-size: 50px;
        animation: zezzz;
        animation-duration: 5s;
        animation-iteration-count: infinite;
    }
    @keyframes zezzz {
    0%,
    10% {
        background-position: -200px;
    }
    20% {
        background-position: top left;
    }
    100% {
        background-position: 200px;
    }
    
    }
            /* form */
    .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: transparent;
    
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;

    }

    .login-box .user-box {
    position: relative;
    }

    .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
    }

    .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
    }

    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #bdb8b8;
    font-size: 12px;
    }

    .login-box form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    background: transparent;
    color: #ffffff;
    font-size: 16px;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px
    
    }

    .login-box button:hover {
    background-color: black;
    color: cyan;
    border-radius: 5px;
    
    }

    .login-box button span {
    position: absolute;
    display: block;
    }

    @keyframes btn-anim1 {
    0% {
        left: -100%;
    }

    50%,100% {
        left: 100%;
    }
    }

    .login-box button span:nth-child(1) {
    bottom: 2px;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent,cyan);
    animation: btn-anim1 2s linear infinite;
    }
 </style>
                <!-- End of test -->
            
        </div>
    </div>
    
    
</body>
</html>
