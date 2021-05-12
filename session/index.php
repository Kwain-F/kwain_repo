<?php
session_start();
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
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

      <ul class="nav">
            <li><a href="index.php">Home<a></li>
            <li><a href="anime.php">Anime<a></li>
              <li><a href="manga.php">Manga<a></li>
              <li><a href="login.php">Login<a></li>
      </ul>

</header>
<div class="container1">
<?php
$user= "slimz24"; #preset username and password
$pwd= "s1234";
#Basically the session to make sure that you stayed logged in when click off the page and return.
#to make sure the login does not reset.
if (isset($_SESSION['username'])){
echo "You have successfully logged in ". $_SESSION['username'];
}
#conditionals to display success/ failure of login
else if ($_POST['username'] == $user && $_POST['password'] == $pwd){
$_SESSION['username'] =$user;
echo "You have successfully logged in ". $_SESSION['username'];
}
else {
  echo "Username or password is incorrect.";

}
?>
</div>
  </body>
</html>
