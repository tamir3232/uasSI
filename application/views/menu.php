
<?php 
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,"menu_makanan");
if(mysqli_connect_errno()){
    echo "failed";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">


    <title>POLES || Cafe</title>
</head>



<h1 class="#" 
style="text-decoration: none; 
text-align:center;
margin-top:100px;
left: 790px; top: 20px; 
color:#fff; 
font-family: font4; font-size: 46px;
filter: drop-shadow(-2px -2px 3px rgba(225,225,225,.4))
			drop-shadow(5px 5px 5px rgba(0,0,0,.3))
			drop-shadow(-2px -2px 3px rgba(0,0,0,.3));">
 Menu</h1>


<table class="table table-dark" style="margin-left:20px; margin-right:20px; ">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
  <tbody>
  <?php
$query =mysqli_query($con,"SELECT * FROM menu" ) ;
while ($row= mysqli_fetch_array($query)){
    $id = $row['ID'];
    $kategori = $row['Kategori'];
    $nama_menu = $row['Nama_menu'];
    $harga = $row['Harga'];
    echo"
    <tr>
      <td>$id</td>
      <td>$kategori</td>
      <td>$nama_menu</td>
      <td>$harga</td>
    </tr>";
}
?>
    
   
  </tbody>
</table>


	


	

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<body>

</body>

</html>