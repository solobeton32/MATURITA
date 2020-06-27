<?php 
$servername = "localhost";
$username = "soumahoro";
$password = "souleymane";

try{
    $connexion = new PDO("mysql:host=$servername;dbname=agenzia", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['btn'])){
      $Nome = $_POST['nome'];
      $Email = $_POST['email'];
      $Oggetto = $_POST['oggetto'];
      $Messaggio = $_POST['messaggio'];
  
      $insert = $connexion->prepare("INSERT INTO cliente(nome,email,oggetto,messaggio) VALUES(:nome,:email,:oggetto,:messaggio)");
      $insert->bindParam(':nome',$Nome);
      $insert->bindParam(':email',$Email);
      $insert->bindParam(':oggetto',$Oggetto);
      $insert->bindParam(':messaggio',$Messaggio);
      $insert->execute();

      header('Location: ../index.php');
      exit();
  }
  else{}
}
catch(PDOException $e){
  echo "Error : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="contact.js" async></script>
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
                   <li><a href="../LOGIN/login.php">Login</a></li>
                   <li><a href="#">Contact </a></li>
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

  <!--=====inizio google map=====-->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2787.0448056731325!2d9.678921215006048!3d45.69007282636517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478151027164c64b%3A0x4e8608a17e9894d5!2sI.T.I.S.%20Pietro%20Paleocapa!5e0!3m2!1sfr!2sit!4v1590508777127!5m2!1sfr!2sit" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <!--=====fine google map=====-->

  <!--====inizio contact=====-->
  <section class="contact" id="contact">
      <div class="container">
          <h2 class="title">contact</h2>
          <div class="contact-content">
              <form action="contact.php" method="post">
                  <input type="text" placeholder="nome.." name="nome">
                  <input type="email" placeholder="email.." name="email">
                  <input type="text" placeholder="oggetto.." name="oggetto">
                  <textarea name="messaggio" placeholder="message.."></textarea>
                  <button class="btn-light" name="btn">Send Message</button>
              </form>
          </div>
      </div>
  </section>
  <!--====fine contact=====-->

  <!--=====inizio footer=====-->
  <footer>
    <div class="container">
        <div class="footer-content">
          <div class="box">
              <div class="icon">
                   <span class="fa fa-phone"></span>
              </div>
              <h4>Phone</h4>
              <p>+1 900 800 700</p>
          </div>
          <div class="box">
              <div class="icon">
                   <span class="fa fa-envelope"></span>
              </div>
              <h4>Email</h4>
              <p>paleocapa@info.com</p>
          </div>
          <div class="box">
              <div class="icon">
                   <span class="fa fa-map-marker"></span>
              </div>
              <h4>Location</h4>
              <p>itis, paleocapa bergamo</p>
          </div>
        </div>
        <div class="social-links">
          <ul>
               <li><a href="#"><span class="fa fa-facebook"></span></a></li>
               <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
               <li><a href="#"><span class="fa fa-skype"></span></a></li>
               <li><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
     </div>
    </div>
  </footer>
</body>
</html>