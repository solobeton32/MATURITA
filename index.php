
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" async></script>
</head>
<body>
    <!---=====preloader=====-->
    <div class="loading-overlay text-center" >
        <div class="loader">
           <div class="loader-div">
             <div class="loader-div">
                <div class="loader-div">
                <div class="loader-div">
                    <div class="loader-div"></div>
                </div>
                </div>
             </div>
           </div>
         </div>
    </div>

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
                   <li><a href="#" class="active">Home</a></li>
                   <li><a href="#dest">offerte</a></li>
                   <li><a href="#gallery">Gallery</a></li>
                   <li><a href="LOGIN/login.php">Login</a></li>
                   <li><a href="CONTACT/contact.php" target="_blank">Contact
                </a></li>
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

  <!--=====destination offerte=====-->
  <section class="dest" id="dest">
    <div class="container">
        <h2 class="title">le nostres offerte</h2>
        <div class="dest-content">
<?php
require_once('index.php');

$mysqli = new mysqli('localhost', 'soumahoro', 'souleymane', 'agenzia');
if ($mysqli->connect_errno) {
  die('<p>Connexion ok : '.$mysqli->connect_error.'</p>');
}
$result = $mysqli->query('SELECT * FROM offerte');
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo"<div class='card'>";
        echo"<div class='box'>";

        echo"<img src='{$row['immagini']}' alt='{$row['citta']}'";
                
        echo"<h3>" . $row['citta']; 
        echo"<i class='fa fa-map-marker' aria-hidden='true'></i>";
        echo"<i class='fa fa-sun-o' aria-hidden='true'></i>" . $row['giorni']. "giorni";
        echo"<i class='fa fa-moon-o' aria-hidden='true'></i>" . $row['notte']."notte";
        echo"</h3>";
        echo"<h4>". $row['prezzo'] ."</h4>";
        echo"</div>";
        echo"</div>";
}
    
}
else{
    echo "nessun risultato";
}

$result->free(); 
$mysqli->close();
?>
</div>
</div>
</section>
  <!--=====fine destinazione=====-->

  <!--=====inizio barra di scorimento-->
  <div class="topbtn"><i class="fa fa-arrow-up"></i></div>
  
  <!--=====inizio gallery=====-->
  <section class="gallery" id="gallery">
      <div class="container">
          <h2 class="title">la nostra gallery</h2>
          <div class="gallery-content">
              <div class="card">
                  <div class="box">
                      <h3>atene</h3>
                      <h4>grecia</h4>
                      <img src="IMAGES/atene.jpg" alt="atene">
                  </div>
              </div>
              <div class="card">
                <div class="box">
                    <h3>oslo</h3>
                    <h4>norvegia</h4>
                    <img src="IMAGES/oslo.jpg" alt="oslo">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h3>lima</h3>
                    <h4>peru</h4>
                    <img src="IMAGES/peru.jpg" alt="peru">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h3>praia</h3>
                    <h4>capo verde</h4>
                    <img src="IMAGES/cap-vert.jpg" alt="vert">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h3>napoli</h3>
                    <h4>italia</h4>
                    <img src="IMAGES/napoli.jpg" alt="napoli">
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h3>seoul</h3>
                    <h4>corea del sud</h4>
                    <img src="IMAGES/seoul.jpg" alt="seoul">
                </div>
            </div>
          </div>
      </div>
  </section>
  <!--=====fine galleria=====-->

  <!--=====inserimento video=====-->
  <div class="videoshow">
      <video muted="" loop="" preload="">
          <source src="bg-video.mp4" type="video/mp4">
          <source src="bg-video.webm" type="video/webm">
      </video>
  </div>
  <!--=====fine inserimento video=====-->
  
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