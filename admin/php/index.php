<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM admins WHERE id = $id"));
}
else{
  header("Location: login.php");
}
//include 'profile.html';
include('../pages/profile.html');
?>
