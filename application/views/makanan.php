<?php require_once("ambildata.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">


    <title>POLES || Cafe</title>
</head>

<img src="<?php echo base_url('asset/image/kitchen1.jpg')?>" style=" top:-100px; height: 1268px;">
<div class="garis2" style="width: 1902px; height:850px; background-color:white; position:absolute; top:480px; left: 0px;"></div>
<a class="#" 
style="text-decoration: none; 
position:absolute; 
left: 790px; top: 250px; 
color:#fff; 
font-family: font4; font-size: 46px;
filter: drop-shadow(-2px -2px 3px rgba(225,225,225,.4))
			drop-shadow(5px 5px 5px rgba(0,0,0,.3))
			drop-shadow(-2px -2px 3px rgba(0,0,0,.3));">
Menu -  Makanan</a>

<div class="container_makanan" style="position:absolute; top:500px;">
    <div class="card-deck ">
<?php for ($i=0; $i<4; $i++) : ?>
        <div class="card" style="width: 25rem; left: 110px;">
          <img class="card-img-top " src="<?= $image[$i]; ?>" alt="Card image cap ">
          <div class="card-body ">
            <h5 class="card-title " style="color:black; "><?= $nama[$i]; ?></h5>
            <p class="card-text " style="color:black; "><?= $description[$i]; ?></p>
          </div>
          <ul>
                            
                        <li><button type="button" class="btn btn-primary"><?= $harga[$i]; ?></button></span> <i class="reviews" style="color: black;"></i> <?= $reviewer[$i]; ?> Reviews</li>
                      </ul>
          </div>
<?php endfor?>
</div>
</div>

<img src="serv.jpg" style="position:absolute; top: 1080px; height: 700px; width: 1900px;">

<ul class="nav">
      <li class="free22">
        <a class="ourmenu" style="color: #fff; text-decoration: none">OUR MENU</a>
		<a class="news" style="color: #fff; text-decoration: none">NEWSLETTER</a>
		<a class="subs" href="https://help.merchline.com/help" style="text-decoration: none;">SUBSCRIBE</a>
		<input type="email" class="input-field1" placeholder="Your Email*"required></input>
		<a class="poles2" href="index.php" style="color: #fff; text-decoration: none">Poles</a>
		<a class="e2" href="index.php" style="color: #FFDC00; text-decoration: none;">l</a>
		<a class="mail" style="text-decoration: none; color:#fff;">Email:</a>
		<a class="pol" href="#" style="text-decoration: none;">PolesCafe@gmail.com</a>
	   <div class="garis" style="width: 2px; height:130px; background-color:#5a5a5a; position:absolute; top: 35px; left: 1114px;"></div>
	   <div class="garis" style="width: 2px; height:130px; background-color:#5a5a5a; position:absolute; top: 35px; left: 854px;"></div>
	   <a class="men" href="#" style="text-decoration: none;">PAKET</a>
	   <a class="strip" style="color:#ADADAD;">/</a>
	   <a class="mak" href="#" style="text-decoration: none;">MAKANAN</a>
	   <a class="strip1" style="color:#ADADAD;">/</a>
	   <a class="minu" href="#" style="text-decoration: none;">MINUMAN</a>
      </li>
      </li>
    </ul>
	
		<ul class="nav">
      <li class="free33">
        <a class="poles4" style="color: #7E7E7E; text-decoration: none">Poles  © 2021</a>
	   <a class="privasi" href="https://help.merchline.com/help" style="text-decoration: none;">Privacy Policy</a>
	  
	  <a href="#">
	   <img src="instagram.png" class="ig" style="position:absolute; top: 22px; left: 1485px; height: 25px">
	   </a>
	   
	     <a href="#">
	   <img src="facebook.png" class="ig" style="position:absolute; top: 22px; left: 1510px; height: 25px">
	   </a>
	   
	     <a href="#">
	   <img src="twitter.png" class="ig" style="position:absolute; top: 22px; left: 1535px; height: 25px">
	   </a>
	   
      </li>
      </li>
    </ul>
	
	<div class="garis2" style="width: 1902px; height:410px; opacity: 0.7; background-color:black; position:absolute; top:1080px; left: 0px;"></div>
	<div class="garis2" style="width: 35px; height:5px; opacity: 1; background-color:#FFE677; position:absolute; top:1285px; left: 742px;"></div>
	<a class="#" 
style="text-decoration: none; 
position:absolute; 
left: 390px; top: 1250px; 
color:#fff; 
font-family: font11; font-size: 46px;">
Fast Delivery</a>
<a class="#" 
style="text-decoration: none; 
position:absolute; 
left: 790px; top: 1273px; 
color:#fff; 
font-family: font3; font-size: 20px;">
Nikmati layanan pengiriman gratis, cepat, dan andal kami.</a>
<a class="subs1" href="https://help.merchline.com/help" style="text-decoration: none;">LEARN MORE</a>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<body>

</body>

</html>