
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration </title>
    <script src="https://kit.fontawesome.com/263a15dbf5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <!--=====inizio Header=====-->
   <header>
       <div class="container">
           <div class="logo">
               <a href="#"><span>ben</span>venuti</a>
           </div>
           <div class="trigger-main">
              <a href="javascript:void(0);" class="ham-burger">
                 <span></span>
                 <span></span>
              </a>
           </div>
           <div class="navbar">
               <ul>
                   <li><a href="../index.php" target="_blank" class="active">Home</a></li>
                   <li><a href="#">offerte</a></li>
                   <li><a href="#">Gallery</a></li>
                   <li><a href="#">Login</a></li>
                   <li><a href="../CONTACT/contact.php">Contact </a></li>
               </ul>
           </div>
       </div>
   </header>
   <!--=====fine header=====-->

   <!--====inizio testo header-->
   <section class="home" id="home">
    <div class="container">
           <div class="home-text">
            <h1>nella nostra agenzia</h1>
            <h3>viaggiate con piacere</h3>                   
           </div>
    </div>
   </section>
  <!--====fine testo header=====-->

   <!--=====inizio form=====-->
    <div class="back-img">
        <div class="form-box">
            <div class="lbl-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <a class="social-list__link" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <a class="social-list__link" href="#">
                    <i class="fab fa-youtube"></i>
                </a>
                
                <a class="social-list__link" href="#">
                    <i class="fab fa-github"></i>
                </a>

                <a class="social-list__link" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
            </div>
            <form action="validation.php" method="post"  id="login" class="input-group">
                <input type="text" name="nome" class="input-field" placeholder="User Id" required>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Ricordare la password</span>
                <button type="submit" class="submit-btn">Log In</button>
            </form>

            <form action="regist.php" method="post" id="register" class="input-group">
                <input type="text" name="nome" class="input-field" placeholder="User.." required>
                <input type="password" name="password" class="input-field" placeholder="password.." required>
                <input type="checkbox" class="check-box"><span>Accetto i termini e le condizioni</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html>