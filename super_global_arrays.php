

<?php
  echo'
  <h1> get</h1>
  <form action="" method="get">
  <input type="text" name="name">
 <input type="text" name="major">
  <button type="submit">submit </button>
  </form>
  <br>
  <h1> post</h1>
  <form action="" method="post">
  <input type="text" name="nme">
 <input type="text" name="mjr">
  <button type="submit">submit </button>
  </form>
  <br>
  <h1> files</h1>
  <form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file_one">
  <input type="file" name="file_two">
 <input type="text" name="name">
  <button type="submit">submit </button>
  </form>

 
  ';

  $cookie_name = "name";
  $cookie_value = "afaf";
  setcookie("name", $cookie_value, time() + (86400 * 30), "/");
  $_SESSION["name"] = "AFAF";
  $_SESSION["major"] = "it";

  echo" <h1> get</h1> <br>";
print_r($_GET);
echo"<h1> Post</h1><br>";

print_r($_POST);

echo"<h1> REQUEST</h1><br>";
// print_r($_SERVER);
print_r($_REQUEST);
echo"<br><h1> GLOBALS</h1><br>";
print_r($GLOBALS);

echo"<br><h1> files</h1><br>";
print_r($_FILES);
echo"<br><h1> COOKIE</h1><br>";
print_r($_COOKIE["name"]);
echo"<br><h1> SESSION</h1><br>";
print_r($_SESSION);

?>