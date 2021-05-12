<?php
session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account</title>
    <style media="screen">
    body {
      background-color: powderblue;
    }
  </style>
  </head>
  <body>

    <h1> Le Weeb Club</h1>
      <h3>Anime friends from across the world.</h3>

      <ul>
            <li><a href="index.php">Home<a></li>
            <li><a href="anime.php">Anime<a></li>
              <li><a href="manga.php">Manga<a></li>
              <li><a href="login.php">Login<a></li>
</ul>
<div>

  <?php
  #$_SESSION is a super global that grabs data for a session varible
  #isset checks is a variable or field is set ?>
<?php
if (isset($_SESSION['username'])){
echo "You are currently signed in as ". $_SESSION['username'].".";
}
else {
  echo "you are not logged in :(";
} #this is for just in case you are not logged in
?>

<center>
<h1>Anime of the Month</h1>
</center>
<div>
  <h3>Attack on Titan: Final season</h3>
  <img src="images/aot.JPG" alt="AOT" width="200px;">
</div>
<div>
<h3>Wonder egg priority</h3>
<img src="images/wep.jpg" alt="Wonder egg priority poster">
</div>
<div>
<h3>Sk8 the infinity</h3>
<img src="images/sk8.jpg" alt="sk8 poster" width="200px;">
</div>
</div>
