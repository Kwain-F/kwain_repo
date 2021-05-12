<?php
session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account</title>
<style media="screen">
    body{
      background-color:powderblue;
    }
    nav{

    }
</style>
  </head>
  <body>
    <h1>Le Weeb Club</h1>
      <h3>Anime friends from across the world.</h3>
      <ul>
            <li><a href="index.php">Home<a></li>
            <li><a href="anime.php">Anime<a></li>
              <li><a href="manga.php">Manga<a></li>
              <li><a href="login.php">Login<a></li>
</ul>

<div>
<?php
if (isset($_SESSION['username'])){
echo "You are successfully logged in as ". $_SESSION['username'].".";
}
else {
  echo "Please Log in :(";
}
?>
<div >
<h3>Deathnote</h3>
<img src="images/deathnote.png" alt="deathnote poster" width="300px;">
  </div>
  <div >
<h3>Tokyo Ghoul</h3>
<img src="images/ghoul.jpg" alt="tokyo ghoul poster">
  </div>
  <div >
<h3>Made in abyss</h3>
<img src="images/mib.jpg" alt="Made in abyss poster" width="300px;">
  </div>
</div>
