<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
include('../pages/register.html');
?>